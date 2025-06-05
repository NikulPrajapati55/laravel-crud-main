<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Guest;
use Carbon\Carbon;

class guestController extends Controller
{
    public function billsdetail()
    {
        $paymentSums = DB::table('guest')
            ->select('payment_mode', DB::raw('SUM(amount) as total'))
            ->groupBy('payment_mode')
            ->get();

        return view('bills.bils', [
            'billsdetail' => Guest::orderBy('id', 'desc')->paginate(10),
            'paymentSums' => $paymentSums
        ]);
    }

    public function guestadd()
    {
        return view('bills.addbils');
    }

    public function paymentbills()
    {
        $paymentSums = DB::table('guest')
            ->select('payment_mode', DB::raw('SUM(amount) as total'))
            ->groupBy('payment_mode')
            ->get();

        return view('bills.paymentbill', compact('paymentSums'));
    }

    public function billsnew(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:300',
            'room_number' => 'required|integer|between:1,40',
            'checkin_date' => 'required|date|before_or_equal:checkout_date',
            'checkout_date' => 'required|date|after_or_equal:checkin_date',
            'payment_mode' => 'required|string',
            'customer_email' => 'required|string',
        ]);
        $checkin = \Carbon\Carbon::parse($request->checkin_date);
        $checkout = \Carbon\Carbon::parse($request->checkout_date);


        $days = $checkin->diffInDays($checkout);
        if ($days == 0) {
            $days = 1;
        }

        $guestdatas = new Guest();
        $guestdatas->customer_name = $request->customer_name;
        $guestdatas->room_number = $request->room_number;
        $guestdatas->checkin_date = $request->checkin_date;
        $guestdatas->checkout_date = $request->checkout_date;
        $guestdatas->amount = $days * 2400;
        $guestdatas->payment_mode = $request->payment_mode;
        $guestdatas->customer_email = $request->customer_email;
        $guestdatas->save();

        return redirect()->route('bils')->with([
            'success' => 'Visitor added successfully!',
        ]);
    }
    public function getAvailableRooms(Request $request)
    {
        $checkin = $request->input('checkin_date');
        $checkout = $request->input('checkout_date');

        if (!$checkin || !$checkout) {
            return response()->json([]);
        }

        $bookedRooms = Guest::where(function ($query) use ($checkin, $checkout) {
            $query->whereBetween('checkin_date', [$checkin, $checkout])
                ->orWhereBetween('checkout_date', [$checkin, $checkout])
                ->orWhere(function ($q) use ($checkin, $checkout) {
                    $q->where('checkin_date', '<=', $checkin)
                        ->where('checkout_date', '>=', $checkout);
                });
        })->pluck('room_number');

        $allRooms = range(1, 40);
        $availableRooms = array_diff($allRooms, $bookedRooms->toArray());

        return response()->json(array_values($availableRooms));
    }

}

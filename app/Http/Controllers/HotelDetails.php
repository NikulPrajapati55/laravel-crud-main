<?php

namespace App\Http\Controllers;
use App\Mail\welcomeemail;
use App\Models\HotelDetail;
use Illuminate\Http\Request;

class HotelDetails extends Controller
{
    public function hoteldetails()
    {
        return view('hotel-data.hotel-details',['HotelDetail'=> HotelDetail::get()]);
    }

    public function newemploye()
    {
        return view('hotel-data.new-employe');
    }
    
    public function storeNew(Request $request) {
        $request->validate([
            'name_employe'=>'required|string|max:300',
            'email_employe'=>'required|email',
            'phone_employe'=>'required',
        ]);

        $HotelDetail = new HotelDetail();
        $HotelDetail->name =$request->name_employe;
        $HotelDetail->email =$request->email_employe;
        $HotelDetail->phone =$request->phone_employe;
        $HotelDetail->post =$request->post_employe;
       
        $HotelDetail->save();
        return back()->withsuccess('employe successfully add!!!');
       
    }

   public function edit($id) {
    $HotelDetail = HotelDetail::where('id',$id)->first();
    return view('hotel-data.edit',['HotelDetail'=> $HotelDetail]);
   }
 public function update(Request $request, $id)
{
    $employe = HotelDetail::findOrFail($id);

    $employe->update([
        'name' => $request->input('name_employe'),
        'email' => $request->input('email_employe'),
        'phone' => $request->input('phone_employe'),
        'post' => $request->input('post_employe'),
    ]);

    return redirect()->route('hotel-details')->with('success', 'Employee updated successfully!');
}
public function destroy($id)
{
    $employee = HotelDetail::findOrFail($id);
    $employee->delete();

    return redirect()->route('hotel-details')->with('success', 'Employee removed successfully!');
}

}       

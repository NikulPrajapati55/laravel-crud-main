<?php

namespace App\Http\Controllers;

use App\Models\visitorModal;
use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class visitorController extends Controller
{
    public function visitordetail()
    {
        return view('visitors.visitor-detail', ['visitordetail' => visitorModal::get()]);
    }
    public function visitoradd()
    {
        return view('visitors.visitor-add');
    }
    public function visitorNew(Request $request)
    {
        $request->validate([
            'name_visitor'  => 'required|string|max:255',
            'phone_visitor' => 'required|string|max:20',
            'img_visitor'   => 'required',
        ]);

        if (!$request->hasFile('img_visitor')) {
            return back()->with('error', 'Image upload failed.');
        }

        $store             = new visitorModal();
        $store->name       = $request->name_visitor;
        $store->phone      = $request->phone_visitor;
        $path = $request->file('img_visitor')->store('visitors', 'public');
        $store->image = $path;
        $store->save();

        return back()->with('success', 'Visitor added successfully!');
    }

    public function edit($id)
    {
        $visitor = visitorModal::where('id', $id)->first();
        return view('visitors.visitor-edit', ['visitordetail' => $visitor]);
    }
    public function update(Request $request, $id)
    {
        $visitor = visitorModal::findOrFail($id);
        $data = [
            'name'  => $request->name_visitor,
            'phone' => $request->phone_visitor,
        ];
        if ($request->hasFile('img_visitor')) {
            if ($visitor->image && Storage::disk('public')->exists($visitor->image)) {
                Storage::disk('public')->delete($visitor->image);
            }
            $data['image'] = $request->file('img_visitor')
                ->store('visitors', 'public');
        }
        $visitor->update($data);
        return redirect()->route('visitordetail')
            ->with('success', 'Visitor updated successfully!');
    }

    public function destroy($id)
    {
        $visitor = visitorModal::findOrFail($id);
        $visitor->delete();
        return redirect()->route('visitordetail');
    }
}

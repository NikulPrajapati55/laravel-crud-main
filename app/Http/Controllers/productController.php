<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\storeData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;




class productController extends Controller
{
    public function allproduct()
    {
        $allproduct = StoreData::all()->groupBy('product_category');

        return view('store.allproduct', compact('allproduct'));
    }
    public function newproduct()
    {
        return view('store.newproduct');
    }

    public function addProduct(Request $request)
    {
        if (!$request->hasFile('product_img')) {
            return back()->with('error', 'Image upload failed.');
        }

        $path = $request->file('product_img')->store('product', 'public');

        $store = new StoreData();
        $store->product_name     = $request->product_name;
        $store->product_category = $request->product_category;
        $store->product_img      = $path;
        $store->product_price    = $request->product_price;
        $store->product_total    = $request->product_total;
        $store->product_status   = $request->product_status === 'active' ? 1 : 0;

        $store->save();

        return redirect()->route('allproduct')->with('success', 'Product added successfully.');
    }
}

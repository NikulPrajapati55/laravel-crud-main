<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\storeData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class StoreDataController extends Controller
{
 public function storeproductadd(Request $request)
 {

    return view('store.productadd');
 }
}

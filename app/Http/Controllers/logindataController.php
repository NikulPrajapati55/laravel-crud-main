<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\logindata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class logindataController extends Controller
{
    public function newlogin(Request $request)
    {

        $request->validate([
            'user_name' => 'required|string|max:30',
            'user_email' => 'required|unique:login_data,user_email',
            'user_password' => 'required|between:1,8'
        ]);

        logindata::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_password' => $request->user_password,
        ]);
        return redirect()->route('login')->with([
            'success' => 'Visitor added successfully!',
        ]);
    }
    public function veroficationlogin(Request $request)
    {
        $verifyemail = $request->input('verify_email');
        $verifypassword = $request->input('verify_password');

        $user = logindata::where('user_email', $verifyemail)->first();

        if ($user && $verifypassword === $user->user_password) {
            Auth::login($user);
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
}

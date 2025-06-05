<?php

namespace App\Http\Controllers;
use Illuminate\Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
 public function login(Request $request)
 {
  $credentials = $request->validate([
    'email' => 'required|email',
    'password' => 'required|min:6',
  ]);
  if (Auth::attempt($credentials)) {
    // Authentication passed...
    return view('home');
     
}}}

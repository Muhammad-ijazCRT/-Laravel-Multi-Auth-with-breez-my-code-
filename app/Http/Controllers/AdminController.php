<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Index()
    {
        return view('admin.admin_login');
    } // End Method


    public function Dashboard()
    {
        return view('admin.index');
    } // End Method



    public function Login(Request $request)
    {
        $check = $request->all();
        // dd($check);

        if (auth()->guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid Email or Password');
        }
    } // End Method

    public function Admin_logout()
    {
        // dd('ldjasdfklajs')
        auth()->guard('admin')->logout();
        return redirect()->route('login_form');
    } // End Method









}
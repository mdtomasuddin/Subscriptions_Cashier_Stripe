<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loadRegister()
    {
        return view("register");
    }

    public function userRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return back()->with('success', 'Registration successful!');
    }


    //user login
    public function loadlogin()
    {
        return view("login");
    }

    public function userlogin(Request $request)
    {
        $userCredentials = $request->only('email', 'password');
        if (Auth::attempt($userCredentials)) {
            return redirect('/dashboard');
        }

        return back()->with('error', 'Username & Password is incorrect !');
    }


    //user dashboard 
    public function dashboard(Request $request)
    {

        return view('dashboard');
    }


    //logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}

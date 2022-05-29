<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function checkRegister(RegisterRequest $request)
    {
        $isValidated = $request->validated();
        if ($isValidated) {
            User :: create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => md5($request->password)
            ]);

            return 'Register is successful';
        }
        else {
            return redirect()->route('register');
        }
    }

    public function checkLogin (Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ]);
        $user = array(
            'email' => $request -> get('email'),
            'password' => $request -> get('password')
        );
        if ($user) {
            return 'Login is successful';
        }
        else {
            return redirect()->back()->withErrors('errors');
        }

    }
}

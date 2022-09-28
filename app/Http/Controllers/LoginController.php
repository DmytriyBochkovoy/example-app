<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('sign-in');
    }

    public function login(Request $request)
    {
        $userFormFields = $request->only([
            'email',
            'password'
        ]);

        if(Auth::attempt($userFormFields)) {
            return redirect(route('index'));
        }

        return redirect(route('sign-in'))->withErrors([
            'email' => 'Не верный email или пароль'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect(route('index'));
    }
}

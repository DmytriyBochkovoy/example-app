<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('sign-up');
    }

    public function save(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required', 'string', 'max:64'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'max:25'],
        ]);

        if(User::where('email', $userData['email'])) {
            redirect(route('sign-in'))->withErrors([
                'email' => 'Такой пользователь уже зарегистрирован'
            ]);
        }

        $user = User::create($userData);

        if($user) {
            Auth::login($user);

            return redirect(route('index'));
        }

        return redirect(route('sign-up'));
    }
}

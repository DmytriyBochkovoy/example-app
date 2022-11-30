<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserApiController extends Controller
{
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

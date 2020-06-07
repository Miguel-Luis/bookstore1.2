<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function login(LoginRequest $request) {
        $email = $request->get('email');
        $password = $request->get('password');

        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        if(Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return back()
                ->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros'])
                ->withInput(request(['email']));
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}

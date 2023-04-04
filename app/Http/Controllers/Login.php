<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    //
    public function auth(Request  $request  )
    {

        $Credenciais = $request->validate([
            'email' =>['required', 'email'],
            'password' =>['required'],
        ],
        [
            'email.required' => 'O campo email é obrigatório seu caralho!',
            'email.email' => 'O email inserido é inválido seu caralho!',
            'password.required' => 'O campo senha é obrigatório seu caralho!'
        ],
    );

        if (Auth::attempt($Credenciais, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }else{
            return redirect()->back()->with('erro', "Usuário ou Senha Inválido..!");
        }
    }

    public function logout(Request $request )
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('site.index'));
    }

    public function create(Request $request )
    {
        return view('login.create');
    }
}
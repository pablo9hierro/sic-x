<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse; 
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }


    public function register(Request $request): RedirectResponse
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Autentica o usuário após o cadastro
    Auth::login($user);

    // Redireciona para a rota de login
    return redirect()->route('login.form')->with('success', 'Cadastro realizado com sucesso! Bem-vindo!');
}

}

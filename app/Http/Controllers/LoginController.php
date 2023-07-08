<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function username()
    {
        return 'matricula';
    }

    protected function attemptLogin(Request $request)
{
    $credentials = $request->only('matricula', 'password');

    return Auth::attempt($credentials, $request->filled('remember'));
}

    // Sobrescreva o método showLoginForm() para exibir seu formulário de login personalizado
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Sobrescreva o método login() para definir a lógica de autenticação personalizada
    public function login(Request $request)
    {
        // Coloque sua lógica de autenticação personalizada aqui
        // Por exemplo, você pode verificar se o usuário tem acesso ou outras regras específicas
        $credentials = $request->only('matricula', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return redirect()->intended('/home');
        }

        // Autenticação falhou
        return back()->withErrors([
            'matricula' => 'As credenciais informadas são inválidas.',
        ]);
        // Se a autenticação for bem-sucedida, redirecione para a página desejada
        //return redirect()->intended('/home');

    }
}

<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

  
    public function loginUser(Request $request)
    {
        if ($request->isMethod("POST")) {
            $data = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if (Auth::attempt($data)) {
                return redirect()->route('filmes.index');
            } else {
               echo "deu errado";
            }
        }

        return view('login');

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
       
      
    }
    public function loginAdmin($request){
    if ($request->isMethod("POST")) {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            return redirect()->route('movies.listAll');
        } else {
            return redirect()->route('login')->with('erro', 'Email ou Senha Incorretos');
        }
    }

    return view('users.login'); }

    public function cpfLogin(Request $request)
    {
        $credentials = $request->only('cpf', 'password');

        if (Auth::guard('cpf')->attempt($credentials)) {
            return redirect()->route('filmes.usuario');
        }

        return redirect()->back()->withErrors(['login' => 'Credenciais inválidas']);
    }


    public function showUserLoginForm()
    {
        return view('user_login'); // Substitua 'user_login' pelo nome da sua view de login de usuário.
    }

    public function showAdminLoginForm()
    {
        return view('admin_login'); // Substitua 'admin_login' pelo nome da sua view de login de administrador.
    }

    public function adminLogin(Request $request)
{
    $credentials = $request->only('cpf', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
        // Autenticação bem-sucedida, redirecione para a página do administrador.
        return redirect()->route('admin.dashboard'); // Substitua 'admin.dashboard' pela rota desejada após o login do administrador.
    }

    // Autenticação falhou, redirecione de volta ao formulário de login com uma mensagem de erro.
    return redirect()->route('admin.login')->with('error', 'Credenciais inválidas');
}


}

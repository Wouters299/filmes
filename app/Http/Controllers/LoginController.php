
<!--
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('usuario')->attempt($credentials)) {
            return redirect()->intended(route('filmes.add'));
        }

       

        return redirect()->back()->withErrors(['login' => 'Credenciais inválidas']);
    }

    public function logout()
    {
        if (Auth::guard('usuario')->check()) {
            Auth::guard('usuario')->logout();
        }

        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;



use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class UsuariosController extends Controller
{

    public function index()
    {
        $filmes = Usuario::all();

        return view('usuarios.index');
    }

    public function add()
    {
        return view('usuarios.add');
    }
    public function addSave(Request $form)
    {

        $dados = $form->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ]);



        $usuario = Usuario::create($dados);



    }

    
}

<?php

namespace App\Http\Controllers;

use App\Models\Filme;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class FilmesController extends Controller
{
    public function add()
    {
        return view('filmes.add');
    }
    public function addSave(Request $form)
    {
        //dd($form); -> Vardump e die
        $dados = $form->validate([
            'nome' => 'required',
            'sinopse' => 'required',
            'ano' => 'required',
            'categoria' => 'required',
            'dataNasc' => 'required',
            'imagem' => 'required',
            'trailer' => 'required',
            
        ]);

        

        $filme = Filme::create($dados);

        
      
    }

}

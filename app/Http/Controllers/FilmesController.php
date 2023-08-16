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

   

public function index()
{
    $filmes = Filme::all();

    return view('filmes.index', compact('filmes'));
}

    public function addSave(Request $form)
{
    $filme = new Filme; // Criar uma nova instância de Filme

    if ($form->hasFile("imagem") && $form->file("imagem")->isValid()) {
        $requestImage = $form->imagem;
        $extension = $requestImage->extension();
        $imageName = ($requestImage->getClientOriginalName() . strtotime("now") . ".jpg"  );

        $requestImage->move(public_path('img/events'), $imageName);

        $filme->imagem = $imageName; // Salvar o nome da imagem na instância de Filme
        return redirect()->route('filmes.index')->with('sucesso', 'Filme adicionado com sucesso');
    }

    $dados = $form->validate([
        'nome' => 'required',
        'sinopse' => 'required',
        'ano' => 'required',
        'categoria' => 'required',
        'trailer' => 'required',
    ]);

    // Preencher os campos restantes da instância de Filme
    $filme->nome = $dados['nome'];
    $filme->sinopse = $dados['sinopse'];
    $filme->ano = $dados['ano'];
    $filme->categoria = $dados['categoria'];
    $filme->trailer = $dados['trailer'];

    $filme->save(); // Salvar a instância de Filme no banco de dados
}
public function edit($id)
{
    $filme = Filme::findOrFail($id);

    return view('filmes.add', [
        'filme' => $filme,
    ]);
}

public function editSave(Request $form, $id)
{
    $filme = Filme::findOrFail($id);

    if ($form->hasFile("imagem") && $form->file("imagem")->isValid()) {
        // Your image handling code here...
    }

    $dados = $form->validate([
        'nome' => 'required',
        'sinopse' => 'required',
        'ano' => 'required',
        'categoria' => 'required',
        'trailer' => 'required',
    ]);

    $filme->nome = $dados['nome'];
    $filme->sinopse = $dados['sinopse'];
    $filme->ano = $dados['ano'];
    $filme->categoria = $dados['categoria'];
    $filme->trailer = $dados['trailer'];

    $filme->save();

    return redirect()->route('filmes.index')->with('sucesso', 'Filme alterado com sucesso');
}


public function delete($id)
{
    try {
        $filme = Filme::findOrFail($id);
        $filme->delete();

        return redirect()->route('filmes.index')->with('sucesso', 'Filme marcado para exclusão');
    } catch (\Exception $e) {
        return redirect()->route('filmes.index')->with('erro', 'Erro ao marcar o filme para exclusão');
    }
}

public function deleteForReal($id)
{
    try {
        $filme = Filme::findOrFail($id);
        $filme->delete();

        return redirect()->route('filmes.index')->with('sucesso', 'Filme excluído com sucesso');
    } catch (\Exception $e) {
        return redirect()->route('filmes.index')->with('erro', 'Erro ao excluir o filme');
    }
}


}
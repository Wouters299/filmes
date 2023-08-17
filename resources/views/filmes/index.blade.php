@extends('layouts')

@section('content')

<link rel="stylesheet" href="{{ asset('css/indexo.css') }}">
    <h1>Lista de Filmes</h1>
    <div class="film-gallery">
        @foreach($filmes as $filme)
            <div class="film-thumbnail">
                <a href="{{ route('filmes.edit', ['id' => $filme->id]) }}">
                    <img src="{{ asset('img/events/' . $filme->imagem) }}" alt="{{ $filme->nome }}" width="200">
                </a>
                <div class="film-details">
                   
                    <form method="post" action="{{ route('filmes.deleteForReal', ['id' => $filme->id]) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border: none; background: none; color: blue; cursor: pointer;">Deletar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <a href="{{ route('filmes.add') }}" class="add-button">Adicionar Novo Filme</a>
@endsection




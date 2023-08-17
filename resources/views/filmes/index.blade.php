@extends('layouts')

@section('content')

<link rel="stylesheet" href="{{ asset('css/indexo.css') }}">
<h1>Lista de Filmes</h1>
<div class="film-gallery">
    @foreach($filmes as $filme)
        <div class="film-thumbnail">
            <a href="{{ route('filmes.edit', ['id' => $filme->id]) }}">
                <img src="{{ asset('img/events/' . $filme->imagem) }}" alt="{{ $filme->nome }}">
                <div class="film-details">
                    <form method="post" action="{{ route('filmes.deleteForReal', ['id' => $filme->id]) }}" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Deletar</button>
                    </form>
                </div>
            </a>
        </div>
    @endforeach
</div>


@endsection

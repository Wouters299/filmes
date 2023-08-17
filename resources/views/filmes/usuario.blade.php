@extends('usuario_layout')

@section('content')

<link rel="stylesheet" href="{{ asset('css/indexo.css') }}">
<h1>Lista de Filmes</h1>
<div class="film-gallery">
    @foreach($filmes as $filme)
        <div class="film-thumbnail">
            <a href="{{ route('filmes.view', ['id' => $filme->id]) }}" class="image-link">
                <img src="{{ asset('img/events/' . $filme->imagem) }}" alt="{{ $filme->nome }}">
                <div class="film-details">

                    </div>
                    </a>




        </div>
    @endforeach
     <div class="filtro">
    <form action="{{ route('filmes.filtro') }}" method="GET" class="filter-form">
    <label for="ano">Filtrar por Ano:</label>
    <input type="text" name="ano" id="ano" value="{{ request('ano') }}">

    <label for="categoria">Filtrar por Categoria:</label>
    <input type="text" name="categoria" id="categoria" value="{{ request('categoria') }}">

    <button type="submit">Filtrar</button>
    <a href="{{ route('filmes.index') }}">🧨</a>
</form>
</div>

</div>


@endsection

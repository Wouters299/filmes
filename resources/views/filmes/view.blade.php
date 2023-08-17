@extends('usuario_layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/add.css') }}">
<section id="movie-details">
    <h1>Detalhes do Filme</h1>
    <div class="movie-details-container">
        <div class="movie-thumbnail">
            <img src="{{ asset('img/events/' . $filme->imagem) }}" alt="{{ $filme->nome }}">
        </div>
        <div class="movie-info">
            <p><strong>Nome:</strong> {{ $filme->nome }}</p>
            <p><strong>Sinopse:</strong> {{ $filme->sinopse }}</p>
            <p><strong>Ano:</strong> {{ $filme->ano }}</p>
            <p><strong>Categoria:</strong> {{ $filme->categoria }}</p>
            <p><strong>Trailer:</strong> <a href="{{ $filme->trailer }}" target="_blank">{{ $filme->trailer }}</a></p>
        </div>
    </div>
</section>
@endsection

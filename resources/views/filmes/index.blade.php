@extends('layouts')

@section('content')
    <h1>Lista de Filmes</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sinopse</th>
                <th>Ano</th>
                <th>Categoria</th>
                <th>Imagem</th>
                <th>Trailer</th>
                <th>Ação</th> <!-- Coluna para o botão de edição -->
            </tr>
        </thead>
        <tbody>
            @foreach($filmes as $filme)
                <tr>
                    <td>{{ $filme->nome }}</td>
                    <td>{{ $filme->sinopse }}</td>
                    <td>{{ $filme->ano }}</td>
                    <td>{{ $filme->categoria }}</td>
                    <td>{{ $filme->imagem }}</td>
                    <td>{{ $filme->trailer }}</td>
                    <td>
                        <a href="{{ route('filmes.edit', ['id' => $filme->id]) }}">Editar</a>
                        <a href="{{ route('filmes.delete', ['id' => $filme->id]) }}">deletar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
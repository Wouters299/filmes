<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($filme) ? 'Editar Filme' : 'Adicionar Filme' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/add.css">
    <script src="../js/add.js" defer></script>
</head>

<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <section id="signup">
        <form action="{{ isset($filme) ? route('filmes.editSave', ['id' => $filme->id]) : route('filmes.addSave') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            
            <h1>{{ isset($filme) ? 'Editar Filme' : 'Novo Filme' }}</h1>
            
            <div class="field">
                <div class="field-input">
                    <label for="nome"><span>*</span>Nome</label>
                    <input value="{{ old('nome', isset($filme) ? $filme->nome : '') }}" type="text" name="nome" placeholder="Nome do Filme">
                </div>
                <div class="field-group">
                    <div class="fname-input">
                        <label for="sinopse"><span>*</span>Sinopse</label>
                        <textarea name="sinopse">{{ old('sinopse', isset($filme) ? $filme->sinopse : '') }}</textarea>
                    </div>
                    <div class="lname-input">
                        <label for="ano"><span>*</span>Ano do Filme</label>
                        <input value="{{ old('ano', isset($filme) ? $filme->ano : '') }}" type="text" name="ano">
                    </div>
                </div>
                <div class="field-group">
                    <div class="fname-input">
                        <label for="categoria"><span>*</span>Categoria</label>
                        <input value="{{ old('categoria', isset($filme) ? $filme->categoria : '') }}" type="text" name="categoria">
                    </div>
                    <div class="lname-input">
                        <label for="imagem"><span>*</span>Imagem</label>
                        <input type="file" name="imagem">
                    </div>
                </div>
                <div class="field-input">
                    <label for="trailer"><span>*</span>Trailer</label>
                    <input value="{{ old('trailer', isset($filme) ? $filme->trailer : '') }}" type="text" name="trailer">
                </div>
                <button type="submit" id="submit-btn">
                    {{ isset($filme) ? 'Salvar Alterações' : 'Cadastrar Filme' }}
                </button>
            </div>
        </form>
    </section>
</body>

</html>

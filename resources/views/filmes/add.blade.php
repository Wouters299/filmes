<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar filmes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="../style/add.css">
    <script src="../js/add.js" defer></script>
</head>

<body>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <section id="signup">
        <form action="{{ route('filmes.addsave') }}" method="POST" class="form" enctype="multipart/form-data" >
            @csrf
            
                    <h1>Novo filmes</h1>
                    <div class="field">
                        
                        <div class="field-input">
                            <label for="nome"><span>*</span>Nome</label>
                            <input value="{{ old('nome', $filmes->nome ?? '') }}" type="text" name="nome"
                                placeholder="João da Silva">
                        </div>
                            <div class="field-group">
                                <div class="fname-input">
                                    <label for="sinope">*<span>sinopse</span></label>
                                    <input value="{{ old('sinopse', $filmes->sinopse ?? '') }}" type="text" name="sinopse">
                                </div>
                                <div class="lname-input">
                                    <label for="ano"><span>*</span>ano do filmes</label>
                                    <input value="{{ old('ano', $filmes->ano ?? '') }}" type="text" name="ano">
                                       
                               
                            </div>
                            <div class="field-group">
                                <div class="fname-input">
                                    <label for="categoria"><span>*</span>categoria</label>
                                    <input value="{{ old('categoria', $filmes->categoria ?? '') }}" type="text" name="categoria">
                                      
                                </div>
                                <div class="lname-input">
                                    <label for="imagem"><span>*</span>imagem</label>
                                    <input value="{{ old('imagem', $aluno->imagem ?? '') }}" type="file" name="imagem"
                                        placeholder="e.g. Doe">
                                </div>
                            </div>
                            <div class="field-input">
                                <label for="trailer"><span>*</span>trailer</label>
                                <input value="{{ old('trailer', $filmes->trailer ?? '') }}" type="text" name="trailer">
                                    
                            </div>
                           
               
                        
                        <button type="submit" id="submit-btn">
                            Cadastrar filmes
                        </button>
                    </div>
                </div>
            
        </form>
    </section>
</body>

</html>
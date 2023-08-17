<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar usuarios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="../css/add_admin.css">
    <script src="../js/add.js" defer></script>
</head>

<body>

    @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
    @endif

    <section id="signup">
        <form action="{{ route('usuarios.addSave') }}" method="POST" class="form">
            @csrf
            
                    <h1>Add usuários</h1>
                    <div class="field">
                        
                        <div class="field-input">
                            <label for="nome"><span>*</span>Nome</label>
                            <input value="{{ old('nome', $usuarios->nome ?? '') }}" type="text" name="nome"
                                placeholder="João da Silva">
                        </div>
                            <div class="field-group">
                                <div class="fname-input">
                                    <label for="sinope">*<span>email</span></label>
                                    <input value="{{ old('email', $usuarios->email ?? '') }}" type="text" name="email">
                                </div>
                                <div class="lname-input">
                                    <label for="senha"><span>*</span>senha </label>
                                    <input value="{{ old('senha', $usuarios->senha ?? '') }}" type="text" name="senha">
                                    </div>  
                               
                           
                        
                        <button type="submit" id="submit-btn">
                            Cadastrar User
                        </button>
                    </div>
                </div>
            
        </form>
    </section>
</body>

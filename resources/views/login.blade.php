<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login - Qacadêmico</title>

    <link rel="stylesheet" href="../css/animacoes_login.css">
    <link rel="stylesheet" href="../css/estilizacao_login.css">
</head>

<body>



    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="{{ url()->current() }}" method="POST">
                @csrf
                <h2> Responsável <br> Aluno </h2>
                <div class="input-group">
                    <input name="email" type="email" required>
                    <label for="">Usuário</label>
                </div>
                <div class="input-group">
                    <input name="password" type="password" required>
                    <label for="">Senha</label>
                </div>

                <button type="submit" class="btn">Entrar</button>

                <div class="sign-link">
                    <p><a href="#" class="signIn-link">Aux. Administrativo</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper sign-in">
            <form action="{{ url()->current() }}" method="POST">
                @csrf
                <h2>Auxiliar <br> Administrativo</h2>
                <p>@include('errors')</p>
                <div class="input-group">
                    <input name="cpf" type="number" required>
                    <label for="">Cpf do Administrador</label>
                </div>

                <div class="input-group">
                    <input name="password" type="password" required>
                    <label for="">Senha</label>
                </div>


                <button type="submit" class="btn">Entrar</button>
                <div class="sign-link">
                    <p> <a href="# " class="signUp-link"> Responsável | Aluno</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>

</html>

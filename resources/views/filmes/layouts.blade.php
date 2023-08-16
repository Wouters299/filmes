<!DOCTYPE html>
<html>
<head>
    <title>Minha Aplicação</title>
</head>
<body>
    <header>
        <h1>Minha Aplicação</h1>
        <nav>
            <ul>
                <li><a href="/">Página Inicial</a></li>
                <li><a href="/filmes">Filmes</a></li>
                <!-- Adicione outros links de navegação conforme necessário -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Minha Aplicação. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Minha Aplicação</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>

    <div class="container-fluid px-0">	
        <header>	
          <a class="header">oi</a>
        </header>	

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Minha Aplicação. Todos os direitos reservados.</p>
    </footer>
</div>
</body>
</html>

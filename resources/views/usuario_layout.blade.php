<!DOCTYPE html>
<html>
<head>
    <title>Minha Aplicação</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>

    <div class="container-fluid px-0">
        <header>
            <div class="shape">

            </div>	<!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-transparent">


                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

     <li class="nav-item">
        <a class="nav-link" href="{{ route('filmes.usuario') }}">1337X</a>
    </li>

        <!-- Add more navigation links as needed -->
    </ul>
</div>
        </nav>	<!-- ./ end of navbar -->
        <div class="container">
            <div class="row">


                	</div>
                	</div>
                </header>

    <main>
        @yield('content')
    </main>


</div>
</body>
</html>

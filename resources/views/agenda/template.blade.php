<html>
<head>
    <meta charset="utf-8">
    <title>Minha Agenda</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/estilo-principal.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <main>
        <section id="menu">
            <header>
                <h1 class="text-center">Minha Agenda</h1>
                <ul>
                    <li>Hello, Adriel </li>
                    <li><a href="#">Sair</a></li>
                </ul>
            </header>
            <hr class="borda" />
            <nav>
                <ul>                  
                    <li>
                        <a href="{{route('create')}}">
                            <i style="font-size: 50px;" class="fa fa-user-plus"></i>
                            <p>Registre seus contatos preferidos</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('list')}}">
                            <i style="font-size: 50px;" class="fa fa-address-card"></i>
                            <p>Visualize, edite e remova seus contatos de forma simples e elegante</p>
                        </a>
                    </li>
                </ul>
            </nav>

        </section>

        <section id="conteudo">
            @yield('conteudo')        
        </section>
    </main>
</body>
</html>
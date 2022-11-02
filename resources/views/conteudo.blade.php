<head>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <header>
        <nav>
            <a href="/home" class="logo">Cenarium</a>
            <ul class="nav-list">
                <li class="botao-menu"><a href="/home" class="menu-buttons">Home</a></li>
                <li class="botao-menu"><a href="/usuario" class="menu-buttons">Usuario</a></li>
                <li class="botao-menu"><a href="/conteudo" class="menu-buttons">Conteudo</a></li>
                <li class="botao-menu"><a href="/perfil" class="menu-buttons">Perfil</a></li>
            </ul>
            <hr>
            <a href="/login" class="menu-buttons">SAIR</a>
        </nav>
        <div class="top-menu">
            <h2>gerenciar Conteudo</h2>
            <div class="men-lat-dir">
                <a href="/perfil">administrador</a>
                |
                <a href="/login">Sair</a>
            </div>
        </div>
    </header>
    <main class = "conteudo">
        <div>
            <h1>
                seçoes existentes
            </h1>
        </div>
        <div>
            <table class="secoes">
                <tr>
                    <th>#</th>
                    <th>seçao</th>
                    <th>açao</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pagina principal</td>
                    <td><a href="#" class="tabela">editar</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Atraçoes culturais</td>
                    <td><a href="#" class="tabela">editar</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Esculturas</td>
                    <td><a href="#" class="tabela">editar</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Iluminaçao cenica</td>
                    <td><a href="#" class="tabela">editar</a></td>
                </tr>
            </table>
        </div>
    </main>
</body>
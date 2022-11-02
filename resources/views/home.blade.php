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
            <h2>Menu</h2>
            <div class="men-lat-dir">
                <a href="/perfil">administrador</a>
                |
                <a href="/login">Sair</a>
            </div>
        </div>
    </header>
    <main>
    <a href="/usuario">
        <div class="card-option">
            <div class="topo-card">Gerenciar Usuarios</div>
            <div class="cont-card">Gerenciamento de Usuarios</div>
            <div class="botton-card">gerenciamento de Usuarios</div>
        </div>
    </a>
    <a href="/conteudo">
        <div class="card-option">
            <div class="topo-card">Gerenciar Conteudo</div>
            <div class="cont-card">Gerenciamento de Conteudos</div>
            <div class="botton-card">gerenciamento de conteudo</div>
        </div>
    </a>

    </main>
</body>
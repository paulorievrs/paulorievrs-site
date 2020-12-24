<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/admin">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Criar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/createposts">Posts</a>
                    <a class="dropdown-item" href="/createimagelink">Image Link</a>
                    <a class="dropdown-item" href="/createextralink">Extra Links</a>
                    <a class="dropdown-item" href="/creategiveaways">Sorteios</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Visualizar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/posts">Posts</a>
                    <a class="dropdown-item" href="/imagelinks">Image Link</a>
                    <a class="dropdown-item" href="/extralinks">Extra Links</a>
                    <a class="dropdown-item" href="/giveaways">Sorteios</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

@if(session('response') !== null)
    <div class="container alerta2">
        <div class="alert alert-info" id="alerta" role="alert">
            <strong class="d-flex justify-content-between">
                {{ session('response') }}
                <button style="background: none; " class="btn-close" onclick="{ document.getElementById('alerta').remove() } ">X</button>
            </strong>
        </div>
    </div>
@endif

@yield('nav')


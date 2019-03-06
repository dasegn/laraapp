<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraApp - </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<header>

    <?php
        function activeMenu($url) {
            return request()->is($url) ? 'active' : '';
        }
    ?>

    <!--
    <p>{{ request()->is('/') ? 'Estás en el home' : 'No estás en el home' }}</p>
    -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <a class="navbar-brand" href="#">LaraApp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item {{ activeMenu('/') }}">
                    <a class="nav-link" href="{{ route('inicio') }}">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ activeMenu('about') }}">
                    <a class="nav-link" href="{{ route('acerca') }}">Acerca</a>
                </li>
                <li class="nav-item {{ activeMenu('servicios') }}">
                    <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item {{ activeMenu('mensajes') }}">
                     <a class="nav-link" href="{{ route('messages.index') }}">Mensajes</a>
                </li>
                <li class="nav-item {{ activeMenu('mensajes/create') }}">
                    <a class="nav-link" href="{{ route('messages.create') }}">Contacto</a>
                </li>
                </ul>
            </div>
    </nav>
</header>

    <div class="container">
        <div class="row">
            <div class="col py-5">
                @yield('contenido')
            </div>
        </div>
    </div>

    {{-- --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstore - @yield('title')</title>
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/main.css')}}" media="screen,projection"/>
</head>

<body>
    {{-------------------------------------------------- Navbar --------------------------------------------------}}
    <div class="prueba navba-fixed">
        <nav class="orange darken-1">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo right">Bookstore</a>
                {{------------------------------------ Elementos --------------------------------------------------}}
                @if(Route::has('login'))
                    @auth
                        {{-- Usuario --}}
                        <ul class="left hide-on-med-and-down">
                            <li>
                                <a class="dropdown-trigger" data-target="dropdow-usuario" href="#">
                                    <i class="material-icons left">account_circle</i>
                                    {{ Auth::user()->name }}
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        </ul>

                        {{-- Elementos Usuario --}}
                        <ul id="dropdow-usuario" class="dropdown-content">
                            <form method="POST" action="{{route('logout')}}">
                                {{ csrf_field() }}
                                <button class="waves-effect waves-light btn deep-orange accent-4">Logout</button>
                            </form>
                        </ul>

                        {{-- Home --}}
                        <ul class="left hide-on-med-and-down">
                            <li class="orange darken-1">
                                <a href="/">
                                    Home
                                    <i class="material-icons left">home</i>
                                </a>
                            </li>
                        </ul>

                        {{-- Estadisticas --}}
                        <ul class="left hide-on-med-and-down">
                            <li class="orange darken-1">
                                <a href="/statistics">
                                    Estadisticas
                                    <i class="material-icons left">trending_up</i>
                                </a>
                            </li>
                        </ul>

                        {{-- Tablas --}}
                        <ul class="left hide-on-med-and-down">
                            <li>
                                <a class="dropdown-trigger" data-target="dropdow-tablas" href="#">
                                    Tablas
                                    <i class="material-icons left">grid_on</i>
                                </a>
                            </li>
                        </ul>

                        <ul id="dropdow-tablas" class="dropdown-content">
                            <li>
                                <a href="/category">
                                    Categorias
                                </a>
                            </li>
                            <li>
                                <a href="/users">
                                    Usuarios
                                </a>
                            </li>
                        </ul>
                    @else
                        {{-- Login --}}
                        <ul class="left hide-on-med-and-down">
                            <li class="orange darken-1">
                                <a href="/login">
                                    Login
                                    <i class="material-icons left">account_circle</i>
                                </a>
                            </li>
                        </ul>

                        {{-- Home --}}
                        <ul class="left hide-on-med-and-down">
                            <li class="orange darken-1">
                                <a href="/">
                                    Home
                                    <i class="material-icons left">home</i>
                                </a>
                            </li>
                        </ul>
                    @endauth
                @endif

                {{-- Categorias --}}
                <ul class="left hide-on-med-and-down">
                    <li>
                        <a class="dropdown-trigger" data-target="dropdow-menu" href="#">
                            Categorias
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>

                {{-- Elementos Categorias --}}
                <ul id="dropdow-menu" class="dropdown-content">
                    @foreach ($categories as $category)
                        <li><a href="/category/show/{{$category->id}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>

                {{----------------------------------------- Fin Elementos ----------------------------------------}}

                {{---------------------------------------- Menu hamburguesa -------------------------------------}}
                <ul id="slide-out" class="sidenav">
                    <h2 class="header center-align orange darken-1">Menu</h2>
                    <li><div class="divider"></div></li>

                    @if(Route::has('login'))
                        @auth
                            {{-- Usuario --}}
                            <li class="orange darken-1">
                                <a class="dropdown-trigger" data-target="dropdow-usuario-hamburguesa" href="#">
                                    <i class="material-icons left">account_circle</i>
                                    {{ Auth::user()->name }}
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>

                            {{-- Elementos Usuario --}}
                            <ul id="dropdow-usuario-hamburguesa" class="dropdown-content">
                                <form method="POST" action="{{route('logout')}}">
                                    {{ csrf_field() }}
                                    <button class="waves-effect waves-light btn deep-orange accent-4">Logout</button>
                                </form>
                            </ul>

                            {{-- Home --}}
                            <li class="orange darken-1">
                                <a href="/">
                                    Home
                                    <i class="material-icons left">home</i>
                                </a>
                            </li>

                            {{-- Estadisticas --}}
                            <li class="orange darken-1">
                                <a href="/statistics">
                                    Estadisticas
                                    <i class="material-icons left">trending_up</i>
                                </a>
                            </li>

                            {{-- Tablas --}}
                            <li class="orange darken-1">
                                <a class="dropdown-trigger" data-target="dropdow-tablas-hamburguesa" href="#">
                                    Tablas
                                    <i class="material-icons left">grid_on</i>
                                </a>
                            </li>

                            <ul id="dropdow-tablas-hamburguesa" class="dropdown-content">
                                <li>
                                    <a href="/category">
                                        Categorias
                                    </a>
                                </li>
                                <li>
                                    <a href="/users">
                                        Usuarios
                                    </a>
                                </li>
                            </ul>
                        @else

                        @endauth
                    @endif

                    <li class="orange darken-1">
                        <a class="dropdown-trigger" data-target="dropdow-menu-hamburguesa">
                            Categorias
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>

                    {{-- Categorias --}}
                    <ul id="dropdow-menu-hamburguesa" class="dropdown-content">
                        @foreach ($categories as $category)
                            <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </ul>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                {{-- ------------------------------------------------------------------------------------------- --}}
            </div>
        </nav>
    </div>
    {{------------------------------------------------- Fin Navbar -------------------------------------------------}}

    <div class="principal container">
        @yield('content')
    </div>

    <footer class="page-footer orange darken-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Bookstore</h5>
                    <p class="grey-text text-lighten-4">"Aunque este Universo poseo, nada poseo, pues no puedo conocer lo desconocido, si me aferro a lo conocido."</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://github.com/Miguel-Luis/" target="_blank">GitHub</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://github.com/Miguel-Luis/bookstore1.2.git" target="_blank">Repositorio del proyecto</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/luis-miguel-gonzalez-giraldo-909322198/" target="_blank">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Copyright Luis Miguel Gonzalez G, All rights reserved.
                <a class="grey-text text-lighten-4 right" href="https://www.amazon.es/comprar-libros-espa%C3%B1ol/b?ie=UTF8&node=599364031" target="_blank">Más Libros</a>
            </div>
        </div>
    </footer>

    @yield('scripts')
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstore - @yield('title')</title>

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
                {{-- Home --}}
                <ul class="left hide-on-med-and-down">
                    <li class="orange darken-1">
                        <a href="/">
                            Home
                            <i class="material-icons left">home</i>
                        </a>
                    </li>
                </ul>
                <a href="/" class="brand-logo right">Bookstore</a>
            </div>
        </nav>
    </div>
    {{------------------------------------------------- Fin Navbar -------------------------------------------------}}

    <div class="principal container">
        @yield('content')
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>

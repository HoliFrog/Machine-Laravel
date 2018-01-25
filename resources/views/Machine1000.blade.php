<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8mb4_general_ci"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title> @yield('title')</title>
    <meta ...>

    <!-- CSS + Font -->
    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    @yield('scripts')
    ...
    <!-- Custom CSS -->
@yield('custom_css')

<!--  Scripts-->
    <script src="{{asset('js/jquery.js')}}"></script>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">

                    <a class="navbar-brand" href="#">Navbar</a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class=" nav navbar-nav">
                            <li class="nav-link">
                                <a class="nav-link" href="{{url('boissons')}}">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('boissons/listByName')}}">trier par nom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('boissons/listByPrice')}}">trier par prix</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        @yield('content')

        <footer>
            ...
        </footer>

        ...
    </div>
</div>
</body>
</html>
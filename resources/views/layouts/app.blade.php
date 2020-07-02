<html lang="es">
    <head>
        @yield("head")
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIG GUAYABERA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="icon" type="image/png" href="{{asset('icon.ico')}}" />
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
        @yield("css")  

    </head>

    <body id="page-top" style="background: white;">

        @yield("body")
        <nav class="navbar navbar-dark bg-dark sticky-top flex-md-nowrap p-0">
            @yield("navbar")

            <div class="my-2 my-lg-2">
                <img src="{{asset('./img/guayabera1.png')}}" width="40" class="d-inline-block align-top logo">
                <a class="navbar-brand logo-text ml-2" href="#">
                    La Guayabera S.A. de C.V.
                </a>
            </div>
            <!-- Authentication Links -->
            @guest
            <div class="my-2 my-lg-2">
                <a class="navbar-bran mr-2 "   href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>{{ __('Login ') }}</a>
                <!--@if (Route::has('register'))
                <a class="navbar-bran "  href="{{ route('register') }}"><i class="fa fa-user-plus"></i>{{ __(' Registro ') }}</a>
                @endif-->
            </div>
                @else

            <div class="my-2 my-lg-2">
                <a href="" class="navbar-brand mr-2"><i class="fas fa-user"></i>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <a class="navbar-brand" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                    Salir
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       
                    @csrf

                </form>
                                
            </div>
            @endguest
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


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

        <!-- Datatables -->
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" type="text/css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/sb-admin.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/sb-admin.min.css')}}">

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
                           
                    
                    
         <!--   <div class="my-2 my-lg-2">
                <a href="" class="navbar-brand mr-2"><i class="fas fa-user"></i>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <a class="navbar-brand" href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt"></i>
                    Salir
                </a>
                <a href="login" class="navbar-brand">
                    <i class="fas fa-sign-in-alt"></i> 
                    Ingresar
                </a>
            </div> -->           
        </nav>

        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row sidebar-row">
                    <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                        @yield("sidebar")

                        <div class="sidebar-sticky mt-1">
                            <ul class="nav flex-column">
                                @yield("ul_sidebar")
                                
                                @if(auth()->user()->es_admin)
                                <li class="nav-item first-one">
                                <a class="nav-linkk" href="{{route('usuarios')}}">
                                        Mantenimiento de Usuarios
                                    </a>
                                </li>
                                @endif
                                @if(auth()->user()->es_tactico)
                                <li class="nav-item first-one">
                                    <a class="nav-linkk" style="text-decoration:none;" href="{{route('rmp_entries')}}">
                                        Informe de Indice de Rotación de Insumos
                                    </a>
                                </li>
                                @endif
                                
                                @if(auth()->user()->es_tactico)                               
                                <li class="nav-item first-one">
                                    <a class="nav-linkk" href="{{route('plp_entries')}}">
                                        Informe de Resumen de Progreso de linea de producto
                                    </a>
                                </li>
                                @endif
                                @if(auth()->user()->es_estrategico)
                                <li class="nav-item first-one">
                                    <a class="nav-linkk " href="{{ route('select_years') }}">
                                        Informe de Demanda de Productos
                                    </a>
                                </li>
                                @endif
                                @if(auth()->user()->es_estrategico)
                                <li class="nav-item first-one">
                                    <a class="nav-linkk " href="#">
                                        Informe de Compra de Insumos
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                    <div class="col-md-10 position-relative" style="padding: 0">
                        @yield("main_footer")
                        <main role="main" class="ml-md-0 pt-2 px-5 mb-5 pb-3">
                                @yield("main")
                            
                            
                        </main>
                        
                        <footer class="footer position-absolute w-100">

                            @yield("footer")
                            <div class="container">
                                <div class="copyright">
                                    <span>Derechos Reservados © SIG - GUAYABERA S.A. de C.V. 2020</span>
                                </div>
                            </div>                            
                        </footer>
                    </div>
                </div>
            </div>
        </div>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Datatables -->

    
	
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js' )}}"></script>

    <!-- Core plugin JavaScript-->
    <script type="text/javascript" src="{{asset('vendor/jquery-easing/jquery.easing.min.js' )}}"></script>

    <!-- Page level plugin JavaScript-->
    <script type="text/javascript" src="{{asset('vendor/datatables/jquery.dataTables.js' )}}"></script>
    <script type="text/javascript" src="{{asset('vendor/datatables/dataTables.bootstrap4.js' )}}"></script>
    
    @yield("js")
  </body>
</html>

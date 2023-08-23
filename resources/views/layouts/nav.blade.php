
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CASAFACIL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="{{asset ('css/welcome.css')}}">
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

</head>



<!-- Contenido de tu barra de navegación -->

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>casafacil@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <!-- <p><i class="fa fa-phone-alt mr-2"></i></p> -->
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">CASA</span>FÁCIL</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{route('welcome')}}" class="nav-item nav-link active">Home</a>
                        <a href="service.html" class="nav-item nav-link">Buscador</a>
                        @auth
                        <a href="{{route('publications')}}" class="nav-item nav-link">Publicar</a>
                        @endauth
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contacto</a>
                           

                           
                            <div class="nav-item dropdown">
    <!-- Ícono de usuario que se convierte en menú desplegable -->
    @auth
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="{{route('profile')}}">Perfil</a>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    @else
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i> Ingresar
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="{{asset('login')}}" class="dropdown-item">Iniciar Sesión</a>
        <a href="{{asset('register')}}" class="dropdown-item">Crear Cuenta</a>
    </div>
    @endauth
</div>
</div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    @yield('content')
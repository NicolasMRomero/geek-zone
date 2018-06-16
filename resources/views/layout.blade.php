<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Geek Zone</title>
    <meta name="description" content="Sitio web e-commerce">
    <meta name="keywords" content="Star wars, Transformers, The Simpsons, Funko, Tienda Geeks">
    <meta name="author" content="Pau, Gise, Nico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  </head>
  <body>
    <!-- Hearder -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light " style="z-index:66">
        <div class="col-lg-5 collapse navbar-collapse" id="navbarSupportedContent" style="text-align:left">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Productos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Star Wars</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Transformers</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Los Simpsons</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Funko</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Tienda Geek</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href='{{ route('faq') }}'>FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Contacto</a>
            </li>
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}" style="">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}" style="">Register</a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}" style="">Profile</a>
              </li>
            @endguest
              </ul>
                </div>
              <div class="col-lg-2"  style="text-align:center">
              <a class="navbar-brand logo-menu" href="index.php"><img src="images/logo-E.png" alt="logo-E"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              </div>
          <div class="col-lg-5"  style="text-align:right">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0 buscar" type="submit"><i class="fas fa-search"></i></button>
            </form>
            </div>
      </nav>
    </header>

    @yield('content')


  <!--Footer-->
  <footer>
    <div class="container mt-3 mb-3 text-center text-md-left">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>GEEK ZONE</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Pensado para los aficionados a la tecnología, los coleccionistas y los fanáticos de la ciencia ficción, Star Wars, Transformers, The Simpsons y los Funkos.</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Productos</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="link-footer" href="#!">Star Wars</a>
                </p>
                <p>
                    <a class="link-footer"  href="#!">Transformers</a>
                </p>
                <p>
                    <a class="link-footer" href="#!">The Simpsons</a>
                </p>
                <p>
                    <a class="link-footer" href="#!">Funko</a>
                </p>
                <p>
                    <a class="link-footer" href="#!">Tienda Geek</a>
                </p>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Contacto</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a class="link-footer" href="https://www.google.com.ar/maps/place/Lima+1111,+C1073AAW+CABA/@-34.6210713,-58.383862,17z/data=!3m1!4b1!4m5!3m4!1s0x95bccb28ea8781cb:0x950feb519009506e!8m2!3d-34.6210713!4d-58.3816733" target="_blank">  <i class="fa fa-home mr-3"></i> Calle Falsa 123</a></p>
                <p>
                  <a class="link-footer" href="mailto:info@geekzon.com?subjetc=Consula%productos" target="_blank">  <i class="fa fa-envelope mr-3"></i>info@geekzone.com</a></p>
                <p>
                  <a class="link-footer" href="tel:5553226" target="_blank">  <i class="fa fa-phone mr-3"></i>5555-3226</a></p>
            </div>
          </div>
          </div>
    <!-- Copyright-->
    <div class="container-copyright" style="background-color:white;">
      <div class="row">
          <div class="col-12 footer-copyright  pt-2 pb-2 text-center">
        Diseñado y programado por:
        <a class="link-footer" href="#">
            <strong> Pau, Gise y Nico</strong>
        </a>
          </div>
        </div>
    </div>
    </footer>
    <!--/.Copyright -->

      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

    </body>
  </html>

<!-- Stored in resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>RESTAURANTE - @yield('title')</title>
    <style>
      .navbar-brand:hover{
         background-color: #31B45B;
         
        }
        .body{
          background-image: url(https://lkbitronic.b-cdn.net/wp-content/uploads/2019/07/290719-525624-PIYDKD-830.jpg);
          background-repeat: no-repeat;
          background-size: cover;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
    </head>
   <body class="body" style="background-color: #2D2B3B;">

    <nav class="navbar navbar-expand-lg" >
  <div class="container-fluid">
    <a class="navbar-brand" style="color: #fff;" href="#">Navbar</a>
    <button style="color: #fff;" class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div  class="collapse navbar-collapse" id="navbarSupportedContent" style="color: #fff;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color: #fff;" class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a style="color: #fff;" class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a style="color: #fff;"class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MI MENU
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Vista 1</a></li>
            <li><a class="dropdown-item" href="registrarlibro">Vista 2 - Registrar Menu</a></li>
            <li><a class="dropdown-item" href="consultalibros">Vista 3 - Consultar Menu</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Vista 4</a></li>
            <li><a class="dropdown-item" href="#">Vista 5</a></li>
            <li><a class="dropdown-item" href="#">Vista 6</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a style="color: #fff;" class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form>
         <!-- Right Side Of Navbar -->
         <ul  class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a  class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color: #fff;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </form>
    </div>
  </div>
</nav>
       <h1 style="text-align: center; color: #fff; font-size: 30px;">ESCENARIO DE USO: RESTAURANTE</h1> 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
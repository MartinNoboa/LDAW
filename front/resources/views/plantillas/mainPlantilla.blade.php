<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>

    <!---------------------------------- css ----------------------------------->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Link para Google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro">
    @stack('styles')


    <!-- Link para iconos fontawesome -->
    <script src="https://kit.fontawesome.com/76fa277871.js" crossorigin="anonymous"></script>
  </head>

    
  <body>

  <nav id = "navbar" class="navbar navbar-expand-lg navbar-light bg-light">
    <a id = "logo" class="navbar-brand" href="{{route('landing')}}"><i class="fas fa-ghost fa-x"></i> Gameshare</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <!-- Aqui van los links para un usuario registrado con sesion iniciada -->
      <ul class="navbar-nav mr-auto">
         <li class="nav-item">
          <a class="nav-link" href="{{ route('panel') }}">Panel Administrativo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('panel.games') }}">Juegos</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ofertas') }}">Ofertas</a>
        </li> 
      </ul>
      <!-- Dropdown para inciar sesion, registrarse y logout en caso de sesion iniciada -->
        <div class="nav-item dropdown">
          <span class="nav-link dropdown-toggle" href="#" id="botonLogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-2x"></i>
          </span>
          <div class="dropdown-menu " aria-labelledby="botonLogin">
            @if (session()->has('sesionUsuario'))
              <a class="dropdown-item" href= "{{ url('logout') }}">Cerrar sesión</a>
            @else
              <a class="dropdown-item" href= "{{ route('login') }}">Iniciar sesión</a>
              <a class="dropdown-item" href= "{{ route('registrar') }}">Registrarse</a>
          @endif
          </div>
      </div>

    </div>
</nav>

  
    
    <!-- @yield('nav') -->
    <main class="container-fluid">
      @yield('mainContent')
    </main>


    <footer class="container-fluid">
      <p>LDAW Equipo 7 - Febrero . Junio 2021</p>
    </footer>


    

    <!-- Optional JavaScript; choose one of the two! -->
      <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </body>
</html>
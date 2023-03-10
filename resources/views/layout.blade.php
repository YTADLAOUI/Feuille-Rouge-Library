
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{asset('style\style.css')}}>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gulzar&display=swap" rel="stylesheet"> 
        
    </head>
   <body>
    
 <header >
    <nav class="d-flex justify-content-between align-items-baseline">
    <div class="dlogo">
        <img class="ilogo" src="{{asset("img/logo.png") }}" alt="">
    </div>
    <div class="linkheadar">
        <ul class="d-flex me-3 p-0">
            <li class="me-4 "><b><a href="#" class="link">Home</a></b></li>
            <li class="me-4 "><b><a href="#" class="link">Livres</a></b></li>
            <li class="me-4 "><b><a href="#"class="link">Article</a></b></li>
            <li class="me-4 "><b><a href="#" class="link">contact</a></b></li>
        </ul>
    </div>
        <div class="log">
        @if (Route::has('login'))
        <div class="px-6 py-4 me-2">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
            @else
                <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary login">Log in</a>
                @if (Route::has('register'))
    <a href="{{ route('register') }}" class="btn btn-primary register">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
{{-- respo --}}
<div class="respo">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="bi bi-list"></i>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Livres</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Article</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
            
              @if (Route::has('login'))
                  @auth
                  <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                  </li>
                  @else
                    <li class="nav-item">
                      <a href="{{ route('login') }}" 
                      class="nav-link">Log in</a>
                    </li>
                      @if (Route::has('register'))
                      <li class="nav-item">
                         <a href="{{ route('register') }}" class="nav-link">Register</a>
                      </li>
                      @endif
                  @endauth
              @endif
        </ul>
        </div>
    </div>
</div>
  {{-- end respo --}}
</nav>
 </header>
 @yield('contant')
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
    
</html>
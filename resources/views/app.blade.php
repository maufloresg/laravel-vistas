<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tips</title>
       <link rel="stylesheet" href="{{ asset('css/app.css')}}"

    </head>
    <body>

      <div class = "container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Tips</a>
       <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
            <a href="{{ route('home')}}" class="nav-link">HOME</a>
      </li>

      <li class="nav-item ">
           <a href="{{ route('about')}}" class="nav-link">NOSOTROS</a>
     </li>


      </ul>
      </nav>

      @yield('content')

      <hr>
      <p>
        La ruta es : {{request()->path()}}
      </p>
      <p>
        La ruta completa : {{request()->url()}}
      </p>

    </body>
</html>

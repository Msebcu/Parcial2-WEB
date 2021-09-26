<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenidos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/6434bdacf9.js" crossorigin="anonymous"></script>

        <!--Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand">CRUD Trabajadores</a>
              <form class="d-flex">
                @if (Route::has('login'))
                    <div class="container-fluid">
                            @auth
                                <a href="{{ url('/home') }}" class="nav-link">Home</a>
                            @else
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Registrar</a>
                            @endif
                        @endauth
                    </div>
                 @endif
              </form>
            </div>
          </nav>


        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar trabajador" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">
                                <i class="fas fa-search"></i>
                                Buscar
                            </button>
                          </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>

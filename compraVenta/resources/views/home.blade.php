<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/f95da80e53.js" crossorigin="anonymous"></script>

        <title>Compra venta</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/que_somos.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <header class="p-3 text-bg-dark">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <span class="fs-4" style="color: white">Compra & Venta</span>
                  </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="{{ route('que_somos') }}" class="nav-link px-2 text-secondary" style="color: white !important;">¿Quienes somos?</a></li>
                  {{-- <li><a href="#" class="nav-link px-2 text-white">Features</a></li> --}}
                </ul>

                <div class="text-end mr-5">
                    <button type="button" class="btn btn-danger me-2" style="background-color:white; color: black; border-color:black">
                        <a  href="{{ route('login') }}" style="text-decoration: none !important; color: black;">Cierra Sesion</a>
                    </button>
                    <button type="button" class="btn btn-danger me-2" style="background-color: darkslategray; border-color:black">
                        <a  href="{{ route('perfil') }}" style="text-decoration: none !important; color: white;">Perfil</a>
                        <i class="fas fa-user-circle" style="font-size: 25px"></i>
                    </button>
                </div>
              </div>
            </div>
        </header>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
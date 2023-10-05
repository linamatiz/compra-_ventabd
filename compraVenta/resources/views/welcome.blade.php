<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Compra venta</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="antialiased">

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

          </div>

        <a  href="{{ route('registro') }}">registrate</a>
        <a  href="{{ route('login') }}">Inicia sesion</a>

        <button class="ingresar" href="{{ route('que_somos') }}">ingresar</button>

        <header>

            <h1 class="cambiar-color">Compra y Venta</h1>

            <i class="fas fa-microchip icono-chip"></i>


            <nav>
                <ul class="enlace">
                    {{-- <li><a href="index.html.html">Inicio</a></li> --}}
                    <li><a  href="{{ route('registro') }}">registrate</a></li>
                    <li><a href="{{ route('que_somos') }}">¿que somos?<a></li>
                </ul>
            </nav>

        </header>


        <main>

            <h1>ACAAAA</h1>

            {{-- <ul>
                @foreach ($datos as $item)
                <li>
                    {{$item->nombre}}
                </li>
                <li>
                    {{$item->numero_documento}}
                </li>
                <li>
                    {{$item->contra}}
                </li>
                @endforeach
            </ul> --}}

            <section class="caracteristicas">
                <h2>Características</h2>
                <ul>
                    <li>buscamos brindar un buen servicio a todos nuestros clientes</li>
                    <li>descuentos cada mes</li>
                    <li>facil registro</li>

                </ul>
            </section>

            <section class="acerca-de">
                <h2>Acerca de Nosotros</h2>
               <p>
                    ¡¡Descubre un mundo de innovación y tecnología en nuestra tienda, donde cada dispositivo cuenta una historia de avance y comodidad
                    Desde los últimos modelos de smartphones hasta potentes laptops y accesorios vanguardistas,
                    te invitamos a explorar nuestro extenso catálogo que abraza la excelencia tecnológica!
            </p>

            </section>

            <section class="contacto">
                <h2>Contacto</h2>
                <p>Ponte en contacto con nosotros en: compraventa@gmail.com</p>
                <P>3102982982</P>
            </section>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

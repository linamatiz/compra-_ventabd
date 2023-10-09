<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<li><a href="{{ route('welcome') }}" class="nav-link px-2 text-secondary" style="color: white !important;">Inicio</a></li>
    {{-- <li><a href="#" class="nav-link px-2 text-white">Features</a></li> --}}
</ul>

<div class="text-end">
<button type="button" class="btn btn-outline-light me-2" style="background-color: white;"><a  href="{{ route('login') }}" style="text-decoration: none !important; color: black;">Inicia Sesion</a></button>
<button type="button" class="btn btn-warning" style="background-color: lightsteelblue;border-color: transparent;"><a  href="{{ route('registro') }}" style="text-decoration: none !important; color:black;">Registrate</a></button>
</div>
</div>
</div>
</header>
<main>
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

<div class="container mt-5">
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
<p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>

<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
</a>

<ul class="nav col-md-4 justify-content-end">
<li><a href="{{ route('que_somos') }}" class="nav-link px-2 text-secondary" style="color: black !important;">¿Quienes somos?</a></li>
    {{-- <li><a href="#" class="nav-link px-2 text-white">Features</a></li> --}}
</ul>
</footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Compra venta</title>

    <!-- Fonts -->
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/registro.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<script src="{{ asset('js/registro.js') }}"></script>
</head>

<body>
<header class="p-3 text-bg-dark">
<div class="container">
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
<span class="fs-4" style="color: white">Compra & Venta</span>
</a>

<div class="text-end">
<button type="button" class="btn btn-warning" style="background-color: white;border-color: transparent;">
<a  href="{{ route('login') }}" style="text-decoration: none !important; color:black;">Inicia Sesion</a>
</button>
</div>
</div>
</div>
</header>
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<div class="card-body">
    <!-- Formulario de inicio de sesión -->
<form action="{{ route('create') }}" method="POST">
@csrf <!-- Agrega el token CSRF para protección contra ataques CSRF -->
<div class="mb-3">
<label for="numerodoc" class="form-label">Numero De documento</label>
<input type="text" class="form-control" id="numerodoc" name="numerodoc" required>
</div>
<div class="mb-3">
<label for="contrasena" class="form-label">Contraseña</label>
<input type="password" class="form-control" id="contrasena" name="contrasena" required>
</div>
<div class="mb-3">
<label for="nombre" class="form-label">Nombre</label>
<input type="nombre" class="form-control" id="nombre" name="nombre" required>
</div>
<div class="mb-3">
<label for="apellido" class="form-label">Apellido</label>
<input type="apellido" class="form-control" id="apellido" name="apellido" required>
</div>
<div class="mb-3">
<label for="correo" class="form-label">Correo</label>
<input type="correo" class="form-control" id="correo" name="correo" required>
</div>
<div class="row justify-content-center">
<button type="submit" class="btn btn-secondary justify-content-end" style="border-color: transparent; background-color: darkslategray;">
Registrate
</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
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

    <!-- Incluye los scripts de Bootstrap desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Compra venta</title>

        <!-- Fonts -->
<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="antialiased">
<header class="p-3 text-bg-dark">
<div class="container">
<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
<span class="fs-4" style="color: white">Compra & Venta</span>
</a>

<div class="text-end">
<button type="button" class="btn btn-warning" style="background-color: white;border-color: transparent;">
<a  href="{{ route('registro') }}" style="text-decoration: none !important; color:black;">Registrate</a>
</button>
</div>
</div>
</div>
</header>

@if(session('errorLogin'))
<div class="alert alert-danger">
{{ session('errorLogin') }}
</div>
@endif
@if(session('registroValido'))
<div class="alert alert-success">
{{ session('registroValido') }}
</div>
@endif
@if (session("registroNoValido"))
<div class="alert alert-danger">
{{session("registroNoValido")}}
</div>
@endif

    <!-- Utiliza clases para centrar vertical y horizontalmente -->
<div class="container  px-4 mt-5 mb-5">
<div class="row w-100 justify-content-center align-items-center">
<div class="col-md-4">
<div class="card">
    <!-- Agrega la clase text-center para centrar el título -->
<div class="card-header text-center " style="background-color: darkslategray !important; color: white">Iniciar Sesión</div>
<div class="card-body">
    <!-- Formulario de inicio de sesión -->
<form method="POST" action="{{ route('inicio-sesion') }}">
@csrf
<div class="mb-3">
<label for="usuario" class="form-label">Numero de documento</label>
<input type="text" class="form-control" id="usuario" name="numero_documento" required>
</div>
<div class="mb-3">
<label for="password" class="form-label">Contraseña</label>
<input type="password" class="form-control" id="password" name="password" required>
</div>
<div class="row">
<button type="submit" class="btn btn-primary mb-2">Iniciar Sesión</button>
</div>
</form>
<div class="row">
<button class="btn btn-secondary justify-content-end" style="border-color: transparent; background-color: darkslategray;">
<a  href="{{ route('registro') }}" style="text-decoration: none !important; color:white;">Registrate</a>
</button>
                           </div>
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


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
            
                <div class="text-end">
                    @if(auth()->check())
                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                        <button class="btn btn-danger me-2" style="background-color:white; color: black; border-color:black">Cerrar Sesión</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </header>
        

<div class="container">
    <div class="row justify-content-center">
        @if(session('actualizacionDatos'))
            <div class="alert alert-success">
                {{ session('actualizacionDatos') }}
            </div>
        @endif
    </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar Perfil</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('perfil.edit') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="numero_documento">Número de Documento</label>
                            <input type="text" class="form-control" id="numero_documento" name="numero_documento" value="{{ old('numero_documento', $cliente->numero_documento) }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $cliente->nombre) }}">
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido', $cliente->apellido) }}">
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="text" class="form-control" id="correo" name="correo" value="{{ old('correo', $cliente->correo) }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>

                        <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
                    </form>
                    <form id="logout-form" action="{{ route('home') }}" method="GET">
                        @csrf
                            <button class="btn btn-danger me-2">Atras</button>
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

</body>
</html>

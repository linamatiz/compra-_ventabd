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

    <body>

        @if(session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
         @endif

        @if (session("Incorrecto"))
            <div class="alert alert-danger">
                {{session("Incorrecto")}}
            </div>
        @endif
        <!-- Utiliza clases para centrar vertical y horizontalmente -->
        <div class="container h-100">
            <div class="row h-50"></div><br><br><br><br><br><br><br>
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="card">
                        <!-- Agrega la clase text-center para centrar el título -->
                        <div class="card-header text-center">Iniciar Sesiónnn</div>
                        <div class="card-body">
                            <!-- Formulario de inicio de sesión -->
                            <form>
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Nombre de Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                                </div>
                                <div class="mb-3">
                                    <label for="contrasena" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-primary mb-2">Iniciar Sesión</button>
                                    <button class="btn btn-secondary justify-content-end">Registrarse</button>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer">
                            Copyrict
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Incluye los scripts de Bootstrap desde CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>


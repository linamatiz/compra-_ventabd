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
    <header>
        <i class="fas fa-laptop fa-2x icono" id="miIcono"></i>
        <h1 class="color_compraventa texto-derecha">Registrate</h1>
          <nav>
                  <ul class="lista-sin-marcador">
                    <li class="alinear-derecha"><a href="index.html.html">INICIO</a></li>
                </ul>
          </nav>
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
                            <button type="submit">Registrar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluye los scripts de Bootstrap desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


          <footer>
              <p>&copy; 2023 Compra y Venta de Tecnología</p>
          </footer>

          <script src="app.js"></script>
    </body>
</html>

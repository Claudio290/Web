<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RentaCar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-primary">
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col bg-info text-light d-flex justify-content-between align-items-center">
                <div>
                    <button class="btn btn-info btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <span class="material-icons">menu</span>
                    </button>
                    <small>Menu de opciones</small>
                </div>
                <div>
                    @auth
                    <small>{{ Auth::user()->nombre }} ({{ Auth::user()->nombrePerfil() }})</small>
                    @endauth
                    <a href="{{ route('usuarios.logout') }}" class="btn btn-sm btn-outline-success">
                        <span class="material-icons fs-6">logout</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="offcanvas offcanvas-start bg-info text-light" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Navegación</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
            </div>
            <hr>
            <div class="offcanvas-body">
                <ul class="list-group">
                    <a class="list-group-item list-group-item-action d-flex align-items-center @if(Route::current()->getName()=='home.index') active @endif" href="{{ route('home.index') }}">
                        <span class="material-icons me-2">home</span>
                        Inicio
                    </a>
                    @if(Gate::allows('ejecutivo-gestion'))
                    <a class="list-group-item list-group-item-action d-flex align-items-center @if(Route::current()->getName()=='solicitudes.index') active @endif" href="{{ route('home.index') }}">
                        <span class="material-icons me-2">library_books</span>
                        Gestion de Arriendos
                    </a>

                    <a class="list-group-item list-group-item-action d-flex align-items-center @if(Route::current()->getName()=='solicitudes.index') active @endif" href="{{ route('home.index') }}">
                        <span class="material-icons me-2">library_books</span>
                        Gestion de Clientes
                    </a>
                    @endif
                    @if(Gate::allows('admin-gestion'))
                    <a class="list-group-item list-group-item-action d-flex align-items-center @if(Route::current()->getName()=='TipoVehiculo.index') active @endif" href="{{ route('home.index') }}">
                        <span class="material-icons me-2">local_library</span>
                        Gestión de Tipo de Vehiculo
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center @if(Route::current()->getName()=='Vehiculo.index') active @endif" href="{{ route('home.index') }}">
                        <span class="material-icons me-2">local_library</span>
                        Gestion de Vehiculos
                    </a>
                    <a class="list-group-item list-group-item-action d-flex align-items-center @if(Route::current()->getName()=='usuarios.index' || Route::current()->getName()=='usuarios.create') active @endif" href="{{ route('usuarios.index') }}">
                        <span class="material-icons me-2">local_library</span>
                        Gestión de Usuarios
                    </a>

                    

                    @endif
                    <a class="list-group-item list-group-item-action d-flex align-items-center @if(Route::current()->getName()=='usuarios.contrasena') active @endif" href="{{ route('usuarios.contrasena') }}">
                        <span class="material-icons me-2">key</span>
                        Cambiar mi Contraseña
                    </a>
                </ul>
            </div>
        </div>

        <div class="w-100 my-3 bg-white rounded">
            <div class="row">
                <div class="col">
                    <div class="p-2 pb-0">
                        <h3 class="text-primary mb-0">Bienvenido @auth{{ Auth::user()->nombre }}@endauth</h3>
                    </div>
                </div>
            </div>

            <div class="p-3 pt-1">@yield('contenido-pagina')</div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

@extends('templates.master')

@section('contenido-pagina')

<div class="row">
    <div class="col text-end mb-2 mt-0">
        <a href="{{ route('usuarios.index') }}" class="btn btn-sm btn-outline-warning pb-0">
            <span class="material-icons">arrow_back</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('usuarios.store') }}">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <p>Por favor solucione los siguientes problemas:</p>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="mb-3">
                        <label for="rut">Rut</label>
                        <input type="rut" class="form-control" id="rut" name="rut">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>

                    <div class="mb-3">
                        <label for="perfil">Perfiles</label>
                        <select name="perfil" id="perfil" class="form-control">
                            @foreach($perfiles as $perfil)
                            <option value="{{ $perfil->id_perfil }}">{{ $perfil->nombre_perfil }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="password2">Repetir Contraseña</label>
                        <input type="password" class="form-control" id="password2" name="password2">
                    </div>

                    <div class="mb-3 d-grid gap-2 d-md-block text-end">
                        <button type="reset" class="btn btn-warning">Restablecer</button>
                        <button type="submit" class="btn btn-success">Crear Usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

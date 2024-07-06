@extends('templates.master')

@section('contenido-pagina')
<div class="row">
    <div class="col text-end mb-2 mt-0">
        <a href="{{ route('usuarios.create') }}" class="btn btn-sm btn-outline-success pb-0">
            <span class="material-icons">add</span>
        </a>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-stripped table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>Nº</th>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $index=>$usuario)
            <tr>
                <td class="small text-center">{{ $index+1 }}</td>
                <td class="small">{{ $usuario->rut }}</td>
                <td class="small">{{ $usuario->nombre }}</td>
                <td class="small">{{ $usuario->perfil->nombre_perfil }}</td>
                <td class="small">{{ $usuario->activo?'Activo':'Baneado' }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip" data-bs-title="Editar Jugador">
                        <span class="material-icons">edit</span>
                     </a>
                </td>
                <td class="text-center">
                    @if($usuario->activo)
                    <a href="#" class="btn btn-sm btn-danger pb-0">
                        <i class="material-icons text-white" style="font-size: 1.1em">person_off</i>
                    </a>
                    @else
                    <a href="#" class="btn btn-sm btn-info pb-0">
                        <i class="material-icons text-white" style="font-size: 1.1em">person</i>
                    </a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{-- /usuarios --}}
@endsection

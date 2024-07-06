@extends('templates.master')

@section('contenido-pagina')
<div class="row p-3">
    @if(Gate::allows('admin-gestion'))
    <x-card-inicio titulo="Gestion de Tipo Vehiculo" descripcion="Ingreso de tipos de vehiculos disponibles" url="home.index" texto-boton="Gestionar Tipo de Vehiculo" />

    <x-card-inicio titulo="Gestion de Vehiculos" descripcion="Gestion de vehiculos disponibles" url="home.index" texto-boton="Gestionar Vehiculos" />

    <x-card-inicio titulo="Gestión de Usuarios" descripcion="Manejo de cuentas de usuario" url="usuarios.index" texto-boton="Gestionar Usuarios" />
    @endif

    <x-card-inicio titulo="Gestion de Arriendos" descripcion="Creacion y manejo de arriendos existentes" url="home.index" texto-boton="Gestionar Arriendos" />
    
    <x-card-inicio titulo="Gestion de Clientes" descripcion="Ingresos de nuevos clientes" url="home.index" texto-boton="Gestionar Clientes" />

    <x-card-inicio titulo="Cambiar mi Contraseña" descripcion="Cambiar contraseña de acceso al sistema" url="usuarios.contrasena" texto-boton="Cambiar Mi Contraseña" />
</div>
@endsection
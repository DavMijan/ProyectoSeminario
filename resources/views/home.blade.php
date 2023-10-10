@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')
@role('admin')
<div class="small-box bg-info" style="width: 300px; height: 150px;">
    <div class="inner">
      <h3>Vehiculos</h3>
      <p>Detalles</p>
    </div>
    <div class="icon">
      <i class="fas fa-car-alt"></i>
    </div>
    <a href="vehiculos" class="small-box-footer">
      Mostrar <i class="fas fa-arrow-circle-right"></i>
    </a>
</div>
<div class="small-box bg-primary" style="width: 300px; height: 150px;">
  <div class="inner">
    <h3>Usuarios</h3>
    <p>Detalles</p>
  </div>
  <div class="icon">
    <i class="fas fa-fw fa-user"></i>
  </div>
  <a href="users" class="small-box-footer">
    Mostrar <i class="fas fa-fw fa-user"></i>
  </a>
</div>
@endrole
@role('stand')
<div class="small-box bg-info" style="width: 300px; height: 150px;">
    <div class="inner">
      <h3>Vehiculo</h3>
      <p>Detalles</p>
    </div>
    <div class="icon">
      <i class="fas fa-car-alt"></i>
    </div>
    <a href="#" class="small-box-footer">
      More info <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>
   
@endrole
<p>Contenido para Todos</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
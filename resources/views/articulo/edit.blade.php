@extends('adminlte::page')

@section('title', 'Editar articulo')

@section('content_header')
    <h1>Editar Articulo</h1>
@stop

@section('content')
    
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}" />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="description" name="description" type="text" class="form-control" value="{{$articulo->description}}" />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}"/>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" class="form-control" value="{{$articulo->precio}}" />
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
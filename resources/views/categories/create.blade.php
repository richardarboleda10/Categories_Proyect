@extends('layouts.app')

@section('content')
    <h1>Crear Categorias</h1>
    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <label for="category_name">Nombre Categoria</label>
        <input class="form-control" type="text" name="category_name" id="category_name" placeholder="Category Name">

        <label for="active">Activo</label>
        <input class="form-check-input" type="checkbox" name="active" id="active" value="0">
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
@endsection

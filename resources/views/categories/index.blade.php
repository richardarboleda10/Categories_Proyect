@extends('layouts.app')

@section('content')
    <h3>Lista de Categorias</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Categoria</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category_name}}</td>
                <td>{{$category->active}}</td>
                <td>
                    <a href="" type="button">Editar</a>
                    <a href="" type="button">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
@endsection

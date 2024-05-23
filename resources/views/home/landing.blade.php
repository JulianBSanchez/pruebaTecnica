@extends('Layouts.literalia')

@section('main_content')
<h3 class="text-center" >Géneros Literarios</h3>
    <my-table-categories></my-table-categories>
    <a href="{{ route('categoria.create') }}" class="btn btn-primary">Agregar nueva categoria</a>
@endsection

@section('secondary_content')
    <h3 class="text-center" >Libros</h3>
    <my-table-productos></my-table-productos>
    <a href="{{ route('producto.create') }}" class="btn btn-primary">Agregar nuevo Libro</a>
@endsection
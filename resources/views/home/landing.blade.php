@extends('Layouts.literalia')

@section('main_content')
<h3 class="text-center" >Géneros Literarios</h3>
    <my-table-categories></my-table-categories>
@endsection

@section('secondary_content')
    <h3 class="text-center" >Libros</h3>
    <my-table-productos></my-table-productos>
@endsection
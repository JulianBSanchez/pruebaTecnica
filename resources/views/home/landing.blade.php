@extends('Layouts.literalia')

@section('main_content')

<h3 class="text-center" >Libros</h3>
    <my-table-productos></my-table-productos>
    <div class="row">
        <div class="col-sm-6 ">
            <div class="text-center">
                <a href="{{ route('producto.create') }}" class="btn btn-primary">Agregar nuevo Libro</a>
            </div> 
        </div>
        <div class="col-sm-6">
            <div class="text-center">
                <a href="" class="btn btn-primary">Exportar libros a XLS</a>
            </div>
        </div>
    </div>   
@endsection

@section('secondary_content')
    <h3 class="text-center" >Géneros Literarios</h3>
    <my-table-categories></my-table-categories>
    <a href="{{ route('categoria.create') }}" class="btn btn-primary mb-4" >Agregar nuevo género literario</a>
    <div class="my-4"></div>
    <h3 class="text-center" >Calendario de pedidos</h3>
    <full-calendar></full-calendar>
@endsection
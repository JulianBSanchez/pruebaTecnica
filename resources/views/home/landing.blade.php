@extends('Layouts.literalia')
@auth

@section('main_content')

    <h3 class="text-center" >Libros</h3>
    <my-table-productos></my-table-productos>
    <div class="row">
        <div class="col-sm-6 ">
            <div class="text-center">
                <a href="{{ route('producto.create') }}"class="btn btn-dark text-white mb-4">Agregar nuevo Libro</a>
            </div> 
        </div>
        <div class="col-sm-6">
            <div class="text-center">
                <a href="{{ route('productos.exportar-excel') }}" class="btn btn-dark text-white mb-4">Exportar a Excel</a>
            </div>
        </div>
    </div>   
@endsection

@section('secondary_content')
    <h3 class="text-center" >Géneros Literarios</h3>
    <my-table-categories></my-table-categories>
    <a href="{{ route('categoria.create') }}" class="btn btn-dark text-white mb-4" >Agregar nuevo género literario</a>
    <div class="my-4"></div>
    <h3 class="text-center" >Calendario de pedidos</h3>
    <my-calendar-event>></my-calendar-event>
    <div class="row">
        <div class="col-sm-6">
            <div class="text-center">
                <a href="{{ route('pedido.show-all') }}" class="btn btn-dark text-white mb-4">Ver todos los pedidos</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="text-center">
                <a href=" {{ route('pedido.create') }}" class="btn btn-dark text-white mb-4">Crear Pedido</a>
            </div>
        </div>
    </div>
@endsection
    
@endauth
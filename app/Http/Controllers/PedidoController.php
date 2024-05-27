<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pedido;
use Carbon\Carbon;

class PedidoController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return $pedidos;
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('Pedido.createOrder');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $pedido = Pedido::Create($request->all());
        return redirect()->route('pedido.edit', $pedido->id);
    }


    public function addProductoPedido($pedidoId, $productoId)
    {   
        $coste = 0;
        $pedido = Pedido::find($pedidoId);
        $pedido->productos()->attach($productoId);
       
        $productos = $pedido->productos;
        $coste = $this->calcularCoste($productos, $pedido);

        $pedido->coste = $coste;
        $pedido->save();
        $todosProductos= Producto::all();
        return view("Pedido.editOrder", compact('pedido', 'productos', 'todosProductos'));
    }

    public function removeProductoPedido($pedidoId, $productoId)
    {   

        $pedido = Pedido::find($pedidoId);
        $pedido->productos()->detach($productoId);
       
        $productos = $pedido->productos;
        $coste = $this->calcularCoste($productos, $pedido);

        $pedido->coste = $coste;
        $pedido->save();
        $todosProductos= Producto::all();
        return view("Pedido.editOrder", compact('pedido', 'productos', 'todosProductos'));
    }

    private function calcularCoste($productos, $pedido)
    {
        $coste = 0;
        foreach($productos as $producto){
            $coste += $producto->precio;
        }

        $fechaPedido = Carbon::parse($pedido->fecha);

        if($fechaPedido->month == 4){
            return $coste += ($coste * 0.15);
        }elseif($fechaPedido->month  == 12){
            return $coste += ($coste * 0.10);
        }else{
            return $coste;
        }
    }
    
    /**
     * Display the a view with all the resources.
     */
    public function showAll()
    {
        $pedidos = Pedido::all();
        return view('Pedido.indexOrder', compact('pedidos'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pedido = Pedido::Find($id);
        return view("Pedido.showOrder", compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::Find($id);
        $productos = $pedido->productos;
        $todosProductos= Producto::all();
        return view("Pedido.editOrder", compact('pedido', 'productos', 'todosProductos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->update($request->all());
        return redirect()->route('pedido.show-all');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
            
        $pedido = Pedido::find($id);
        // Eliminar las relaciones en la tabla pivot
        $pedido->productos()->detach();

        // Ahora eliminar el pedido
        $pedido->delete();

        return redirect()->route('pedido.show-all');
    }
}

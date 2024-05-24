<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pedido;

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
        Pedido::Create($request->all());
        return redirect()->route('home');
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
        return view("Pedido.editOrder", compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $pedido)
    {
        $pedido->update($request->all());
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pedido::find($id)->delete();
        return redirect()->route('home');
    }
}

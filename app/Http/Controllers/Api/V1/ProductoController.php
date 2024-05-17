<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\http\Resources\V1\ProductoResource;
use Illuminate\Http\JsonResponse;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResponse
    {
        return response()->json(Producto::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//:JsonResponse
    {
        $productoRequest = $request;
        $producto = Producto::Create($productoRequest->all());
        return response()->json(['success' => true, 'data' => $producto], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id):JsonResponse
    {
        $producto = Producto::find($id);
        return response()->json($producto, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id):JsonResponse
    {
        $producto = Producto::find($id);
        $producto->update($request->all());
        return response()-> json(['success' => true, 'data' => $producto], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id):JsonResponse
    {
        Producto::find($id)->delete();
        return response()->json(['success' => true], 200);
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Resources\V1\CategoriaResource;
use Illuminate\Http\JsonResponse;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResponse
    {
        return response()->json(Categoria::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):JsonResponse
    {
        $categoria = Categoria::create($request->all);
        return response()->json(['success' => true, 'data' => $categoria], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)//:JsonResponse
    {
       return response()->json($categoria, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id):JsonResponse
    {
        $categoria = Categoria::find($id);
        $categoria::update($request->all());
        return response()->json(['success' => true, 'data' => $categoria], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria):JsonResponse
    {
        Categoria::find($categoria)->delete();
        return response()->json(['success' => true], 200);
    }
}

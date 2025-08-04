<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Producto::with('marca')->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|string',
            'disponible' => 'required|boolean',
            'marca_id' => 'required|exists:marca,id',
        ]);

        $producto = Producto::create($request->all());

        return response()->json([
            'mensaje' => 'Producto creado correctamente',
            'producto' => $producto->load('marca')
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json([
                'mensaje' => 'producto no encontrado'
            ], 404);
        }

        return response()->json([
            'producto' => $producto->load('marca')
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|string',
            'disponible' => 'required|boolean',
            'marca_id' => 'required|exists:marca,id',
        ]);
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json([
                'mensaje' => 'producto no encontrado'
            ], 404);
        }
        $producto->update($request->all());

        return response()->json($producto->load('marca'), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json([
                'mensaje' => 'producto no encontrado'
            ], 404);
        }
        $producto->delete();
        return response()->json([
            'mensaje' => 'producto eliminada correctamente'
        ], 200);
    }
}

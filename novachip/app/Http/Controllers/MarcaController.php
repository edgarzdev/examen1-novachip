<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    // Mostrar todas las marcas
    public function index()
    {
        return response()->json(Marca::all(), 200);
    }
    // Crear nueva marca
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $marca = Marca::create($request->all());

        return response()->json([
            'mensaje' => 'marca creada correctamente',
            'marca' => $marca
        ], 201);
    }
    public function show(string $id)
    {
        $marca = Marca::find($id);
        if (!$marca) {
            return response()->json([
                'mensaje' => 'marca no encontrada'
            ], 404);
        }

        return response()->json([
            'marca' => $marca
        ], 200);
    }
    // Actualizar una marca
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);
        $marca = Marca::find($id);
        if (!$marca) {
            return response()->json([
                'mensaje' => 'marca no encontrada'
            ], 404);
        }
        $marca->update($request->all());

        return response()->json(
            [
                'mensaje' => 'Marca actualizada correctamente',
                'marca' => $marca
            ],
            200
        );
    }

    // Eliminar una marca
    public function destroy(string $id)
    {
        $marca = Marca::find($id);
        if (!$marca) {
            return response()->json([
                'mensaje' => 'marca no encontrada'
            ], 404);
        }
        $marca->delete();
        return response()->json([
            'mensaje' => 'marca eliminada correctamente'
        ], 200);
    }
}

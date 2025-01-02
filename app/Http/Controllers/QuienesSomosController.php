<?php

namespace App\Http\Controllers;

use App\Models\QuienesSomos;
use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    // Método para obtener la información de la sección quienes somos
    public function index()
    {
        try {
            $quienesSomos = QuienesSomos::all();
            return response()->json($quienesSomos, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al obtener los datos'], 500);
        }
    }

    // Método para modificar la información de la sección quienes somos
    public function update($id, Request $request)
    {
        $quienesSomos = QuienesSomos::find($id);

        if (!$quienesSomos) {
            return response()->json(['message' => 'No se encontró el registro'], 404);
        }

        $validatedData = $request->validate([
            'contenido' => 'nullable|string|max:1000', // Ajusta la validación según tus necesidades
        ]);

        $quienesSomos->contenido = $validatedData['contenido']; // Asegúrate de asignar los datos correctamente
        $quienesSomos->save(); // Guarda los cambios en la base de datos

        return response()->json($quienesSomos, 200);
    }
}

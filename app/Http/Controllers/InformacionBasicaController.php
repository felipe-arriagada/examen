<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformacionBasica;

class InformacionBasicaController extends Controller
{
    public function index()
{
    $data = InformacionBasica::all(); // Trae todos los registros de la tabla
    return response()->json($data);
}


    public function update($id, Request $request)
    {
    $data = $request->only([
        'logo_url', 
        'company_name', 
        'description', 
        'seo_keywords', 
        'main_menu'
    ]);

    // Aquí se guardar los datos en la BD
        // Encuentra el registro por ID
        $informacionBasica = InformacionBasica::find($id);

        if (!$informacionBasica) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }
       

        // Actualiza los campos del registro con los datos de la solicitud
        $informacionBasica->description = $request->input('description');
        $informacionBasica->logo_url = $request->input('logo_url');
        $informacionBasica->company_name = $request->input('company_name');
        $informacionBasica->seo_keywords = $request->input('seo_keywords');
        // Agrega más campos según sea necesario

        // Guarda los cambios en la base de datos
        $informacionBasica->save();

        return response()->json(['message' => 'Registro actualizado correctamente', 'data' => $informacionBasica], 200);
    }

    public function delete(Request $request)
    {
        $fields = $request->input('fields', []);

        // Aquí se deshabilitan los campos en la base de datos.
        return response()->json(['message' => 'Campos deshabilitados', 'fields' => $fields]);
    }

    public function patch($id, Request $request)
{
    $record = InformacionBasica::find($id);

    if (!$record) {
        return response()->json(['message' => 'Registro no encontrado'], 404);
    }

    $validatedData = $request->validate([
        'logo_url' => 'nullable|url',
        'company_name' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:500',
        'seo_keywords' => 'nullable|array',
        'main_menu' => 'nullable|array',
        'is_enabled' => 'nullable|boolean', // Campo opcional para habilitar/deshabilitar
    ]);

    $record->update($validatedData);

    return response()->json(['message' => 'Actualización completada', 'data' => $record]);
}

public function habilitar($id)
{
    $record = InformacionBasica::find($id);

    if (!$record) {
        return response()->json(['message' => 'Registro no encontrado'], 404);
    }

    $record->is_enabled = true; // O false, si deseas deshabilitarlo
    $record->save();

    return response()->json(['message' => 'Habilitado correctamente', 'data' => $record]);
}

}

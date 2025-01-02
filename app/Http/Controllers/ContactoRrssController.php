<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\ContactoRrss;

class ContactoRrssController extends Controller
{
public function index(){
    $data= ContactoRrss::all(); //trae todos los registros
    return response()->json($data);
}
public function update($id, Request $request)
{
    $contactoRrss = ContactoRrss::find($id);

    if (!$contactoRrss) {
        return response()->json(['message' => 'No se encontró el registro'], 404);
    }

    $validatedData = $request->validate([
        'telefono' => 'nullable|string|max:100', // Ajusta la validación según tus necesidades
        'instagram' => 'nullable|string|max:100'
    ]);

    $contactoRrss->telefono = $validatedData['telefono']; // Asegúrate de asignar los datos correctamente
    $contactoRrss->instagram = $validatedData['instagram']; // Asegúrate de asignar los datos correctamente
    $contactoRrss->save(); // Guarda los cambios en la base de datos

    return response()->json($contactoRrss, 200);
}

public function create(Request $request)
{
    // Validar los datos
    $validated = $request->validate([
        'instagram' => 'required|string|max:255',
        'telefono' => 'required|string|max:15',
    ]);

    // Crear el registro
    $contacto = new ContactoRrss();
    $contacto->instagram = $validated['instagram'];
    $contacto->telefono = $validated['telefono'];
    $contacto->id = auth()->id(); // Relación con el usuario autenticado
    $contacto->save();

    // Respuesta con mensaje de éxito
    return response()->json([
        'message' => 'Información de contacto agregada exitosamente.',
        'data' => $contacto
    ], 201);
}


public function delete($id)
{
    $record = ContactoRrss::find($id);

    if (!$record) {
        return response()->json(['message' => 'Registro no encontrado'], 404);
    }

    // Actualizar el campo is_enabled a false o 0
    $record->update(['is_enabled' => 0]);

    return response()->json(['message' => 'Registro desactivado correctamente'], 200);
}



    public function patch($id, Request $request)
    {
        $record = ContactoRrss::find($id);
       
        if (!$record) {
            return response()->json(['message' => 'Registro no encontrado' ,'data' => $record], 404);
        }
    
        // Solo permite actualizar 'is_enabled'
        if ($request->has('is_enabled')) {
            $record->update(['is_enabled' => $request->input('is_enabled')]);
        } else {
            return response()->json(['message' => 'No se proporcionó un valor válido para is_enabled'], 400);
        }
    
        return response()->json([
            'message' => 'Registro actualizado exitosamente',
            'record' => $record
        ]);
    }
    public function habilitar($id)
{
    $record = ContactoRrss::find($id);

    if (!$record) {
        return response()->json(['message' => 'Registro no encontrado'], 404);
    }

    $record->is_enabled = true; // O false, si deseas deshabilitarlo
    $record->save();

    return response()->json(['message' => 'Habilitado correctamente', 'data' => $record]);
}
=======

class ContactoRrssController extends Controller
{
    //
>>>>>>> 018e7a859f7fd3a09042aa1b24c8afa3cc5fe8a2
}

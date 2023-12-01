<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function store(Request $request)
    {
        // Lógica para almacenar la actividad en la base de datos
        $data = $request->validate([
            'name' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        // Guardar la actividad en la base de datos
        Activity::create($data);

        // Redirigir a donde sea necesario después de almacenar la actividad
        return redirect()->route('calendar')->with('success', 'Actividad almacenada exitosamente.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PlanInicial;
use Illuminate\Http\Request;

class PlanInicialController extends Controller
{
    public function showForm()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        // Valida y guarda los datos
        $request->validate([
            // Especifica las reglas de validación según tus necesidades
            
        ]);

        PlanInicial::create($request->all());

        return redirect('/formularioplan')->with('success', 'Datos guardados correctamente');
    }

    public function create()
    {
        return view ('formularioplan.create');
    }

    
}

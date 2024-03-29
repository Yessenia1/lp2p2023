<?php

namespace App\Http\Controllers;

use App\Models\informe;
use Illuminate\Http\Request;

class ValidarController extends Controller
{
    public function cambiarValorValido($id)
    {
        try {
            // Lógica para cambiar el valor en la tabla
            $informe = Informe::findOrFail($id); // Asegúrate de capitalizar la primera letra del modelo
            $informe->estado = 'Valido';
            $informe->save();

            return redirect()->back()->with('success', 'Estado cambiado exitosamente');
            // Redirigir a la página anterior o a donde desees
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al cambiar el estado del informe: ' . $e->getMessage());
            // Manejar cualquier excepción que ocurra al intentar guardar
        }
    }
}

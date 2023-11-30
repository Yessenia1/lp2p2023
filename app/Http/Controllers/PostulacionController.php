<?php

namespace App\Http\Controllers;

use App\Models\InscripcionConvocatoria;
use App\Models\Postulacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PostulacionController extends Controller
{
    public function guardarPostulacion(Request $request)
    {

        // Verifica si el usuario logueado ya tiene un registro en la misma convocatoria
        $practicanteId = Auth::id();
        $convocatoriaId = $request->input('convocatoria_id');; // Asegúrate de tener la ID de la convocatoria

        $usuarioTieneRegistro = Postulacion::where('practicante_id', $practicanteId)
            ->where('convocatoria_id', $convocatoriaId)
            ->exists();

        if ($usuarioTieneRegistro) {
            Alert::error('¡No guardado!', 'Ya te has postulado a esta convocatoria.');
            return redirect("convocatoria");
        }

        // Lógica para guardar la postulación en la base de datos
        $postulacion = new Postulacion();
        $postulacion->convocatoria_id = $convocatoriaId;
        $postulacion->practicante_id = auth()->id();
        $postulacion->save();

        Alert::success('¡Guardado!', 'Postulado exitosamente!');

        return redirect("convocatoria");
    }
}
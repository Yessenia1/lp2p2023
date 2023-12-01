<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function showCalendar()
    {
        // Lógica para mostrar el calendario
        return view('calendar');
    }

    public function showActivityForm($day)
    {
        // Lógica para mostrar el formulario para una actividad en un día específico
        return view('activity-form', ['day' => $day]);
    }
}

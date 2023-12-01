<?php

namespace App\Http\Controllers;

use App\Models\Practicante;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PdfController extends Controller
{
    public function generarPDF()
    {
        $pdf = PDF::loadView('pdff');
        
        return $pdf->download('mi_archivo.pdf');
    }
}





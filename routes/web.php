<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PostulacionController;
use App\Models\informe;
use App\Models\Practicante;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\PlanInicialController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ActivityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/crearconvocatoria', CrudConvocatoria::class)->names([
        'index' => 'convocatoria',
        'create' => 'convocatoria',
        'store' => 'convocatoria',
        'show' => 'convocatoria',
        'edit' => 'convocatoria',
        'update' => 'convocatoria',
        'destroy' => 'convocatoria',
    ]);

    Route::get('/convocatoria', function () {
        return view('convocatorias');
    })->name('convocatoria');

    Route::get('/crearconvocatoria', function () {
        return view('crearconvocatoria');
    })->name('crearconvocatoria');

    Route::get('/plan', function () {
        return view('plan');
    })->name('plan');

    Route::get('/documento', function () {
        return view('documento');
    })->name('documento');



    Route::get('/masinfo', function () {
        return view('masinfo');
    })->name('masinfo');

    Route::get('/formulario', function () {
        return view('formulario');
    })->name('formulario');

    Route::get('/formularioplan', function () {
        return view('formularioplan');
    })->name('formularioplan');


    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::post('/guardar-postulacion', [TuControlador::class, 'guardarPostulacion'])->name('postulacion.guardar');
    });



    Route::post('/gato', [PostulacionController::class, 'guardarPostulacion'])->name('gato');




    Route::get('/informe', function () {
        $informes = informe::all();
        $practicante = Practicante::all();
        return view('informe', compact('informes', 'practicante'));
    })->name('informe');
    Route::get('/ver-pdf/{nombre}', function ($nombre) {
        $ruta = public_path("document/{$nombre}.pdf");
        if (file_exists($ruta)) {
            $contenido = file_get_contents($ruta);

            return response($contenido, 200)
                ->header('Content-Type', 'application/pdf');
        } else {
            abort(404);
        }
    })->name('ver-pdf');
    Route::post('/validacion/{id}', [ValidarController::class, 'cambiarValorValido'])->name('valorValido');

    Route::get('/mostrar-fecha', 'FechaController@mostrarFecha');

    Route::post('/guardar-comentario', 'ComentarioController@guardar');



    Route::get('/pdff', function () {

        return view('pdff');
    })->name('pdff');


    Route::get('/generar-pdf', [PdfController::class, 'generarPDF'])->name('generar-pdf');


    // Ruta para mostrar el formulario
    Route::get('/formulario', [PlanInicialController::class, 'showForm']);

    // Ruta para procesar el formulario
    Route::post('/formularioplan', [PlanInicialController::class, 'store']);

    Route::get('/actividades', function () {
        return view('actividades');
    })->name('actividades');




    Route::get('/calendar', [CalendarController::class, 'showCalendar'])->name('calendar');
    Route::get('/activity/{day}', [CalendarController::class, 'showActivityForm'])->name('activity.form');
    Route::post('/activity/store', [ActivityController::class, 'store'])->name('activity.store');
});

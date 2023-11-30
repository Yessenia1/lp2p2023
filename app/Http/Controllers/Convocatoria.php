<?php
namespace App\Http\Livewire;

use Livewire\Component;

class TuComponente extends Component
{
    protected $listeners = ['guardarPostulacion'];

    public function render()
    {
        return view('livewire.convocatorias');
    }

    public function guardarPostulacion()
    {
        // Aquí implementa la lógica para guardar la postulación en la base de datos
        // Puedes acceder a los datos necesarios aquí
        // Ejemplo:
        // $nombre = $this->nombre;

        // Guarda los datos en la base de datos...

        // Emite un mensaje de éxito si es necesario
        session()->flash('mensaje', 'Postulación guardada exitosamente');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ActivityForm extends Component
{
    use WithFileUploads;

    public $image;

    public $activity;
    public $startDate;
    public $endDate;
    public $description;
    public $selectedDay;

    public function render()
    {
        return view('livewire.activity-form');
    }

    public function saveActivity()
    {
        // Aquí deberías guardar los datos en la base de datos
        // Ejemplo: Eloquent o algún otro método de persistencia

        // Mostrar un mensaje de éxito
        session()->flash('message', 'Datos guardados exitosamente.');

        // Restablecer los campos después de guardar
        $this->reset();

        // Cerrar el formulario emergente después de guardar
        

        // Validación y lógica de almacenamiento de actividad...

        // Almacenar la imagen
        

        // Resto de tu lógica...

        // Limpiar el campo de la imagen después de almacenar
        $this->image = null;
    }

    public function emitEvento()
    {
        // Lógica del método si es necesario

        // Emitir el evento
        $this->emit('actividadGuardada');
    }

    

}






<?php

namespace App\Livewire;

use App\Models\Convocatoria;
use Livewire\Component;

class ConvocatoLivewire extends Component
{
    public function render()
    {
        
        $convocatorias=Convocatoria::all();
        return view('livewire.convocato-livewire', compact('convocatorias'));
    }
}

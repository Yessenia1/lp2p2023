<?php

namespace App\Livewire;

use App\Models\Convocatoria;
use App\Models\Empresa;
use Livewire\Component;

class ConvocatoriLivewire extends Component
{
    public function render()
    {
        $convocatorias = Convocatoria::with('empresa')->get();
        $empresas = Empresa::all();

        return view('livewire.convocatori-livewire', compact('convocatorias', 'empresas'));
    }
}

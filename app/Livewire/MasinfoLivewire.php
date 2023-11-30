<?php

namespace App\Livewire;

use App\Models\Convocatoria;
use App\Models\Empresa;
use Livewire\Component;

class MasinfoLivewire extends Component
{
    
    public function render()
    {
        $convocatorias = Convocatoria::all();
        $empresas = Empresa::all();

        return view('livewire.masinfo-livewire', compact('convocatorias', 'empresas'));
    }
}

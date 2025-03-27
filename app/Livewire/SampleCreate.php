<?php

namespace App\Livewire;
use App\Models\Sample;
use Flux\Flux;
use Livewire\Component;

class SampleCreate extends Component
{
    public $nombre, $direccion, $fecha, $hora, $tipo_muestra, $contacto, $recolector, $observaciones; 

    public function submit()
    {
        $this->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'tipo_muestra' => 'required',
            'contacto' => 'required',
            'recolector' => 'required',
            'observaciones' => 'required',
        ]);

        Sample::create([
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'tipo_muestra' => $this->tipo_muestra,
            'contacto' => $this->contacto,
            'recolector' => $this->recolector,
            'observaciones' => $this->observaciones
        ]);
        

        $this->clean();
        Flux::modal('create-sample')->close(); 
        $this->dispatch('reloadSamples');
    }

    public function clean()
    {
        $this->nombre = '';
        $this->direccion = '';
        $this->fecha = '';
        $this->hora = '';
        $this->tipo_muestra = '';
        $this->contacto = '';
        $this->recolector = '';
        $this->observaciones = '';

    }

    public function render()
    {
        return view('livewire.sample-create');
    }
}

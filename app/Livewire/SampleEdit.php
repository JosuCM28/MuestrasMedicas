<?php

namespace App\Livewire;

use Livewire\Component;
use Flux\Flux;
use Livewire\Attributes\On;
use App\Models\Sample;

class SampleEdit extends Component
{
    public $sampleid, $nombre, $direccion, $fecha, $hora, $tipo_muestra, $contacto, $recolector, $observaciones; 


    public function render()
    {
        return view('livewire.sample-edit');
    }

    #[On('editSample')]
    public function editSample($id){
        
        $sample = Sample::find($id);
        $this->sampleid = $id;
        $this->nombre = $sample->nombre;
        $this->direccion = $sample->direccion;
        $this->fecha = $sample->fecha;
        $this->hora = $sample->hora;
        $this->tipo_muestra = $sample->tipo_muestra;
        $this->contacto = $sample->contacto;
        $this->recolector = $sample->recolector;
        $this->observaciones = $sample->observaciones;


        Flux::modal('edit-sample')->show();
        
    }
    public function update(){

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

        $sample = Sample::find($this->sampleid);
        $sample->nombre = $this->nombre;
        $sample->direccion = $this->direccion;
        $sample->fecha = $this->fecha;
        $sample->hora = $this->hora;
        $sample->tipo_muestra = $this->tipo_muestra;
        $sample->contacto = $this->contacto;
        $sample->recolector = $this->recolector;
        $sample->observaciones = $this->observaciones;
        
        $sample->save();
        
        
        Flux::modal('edit-sample')->close(); 
        $this->dispatch('reloadSamples');

    }
}

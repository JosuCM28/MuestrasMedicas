<?php

namespace App\Livewire;
use App\Models\Sample;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class SampleShow extends Component
{
    public $sampleid, $nombre, $direccion, $fecha, $hora, $tipo_muestra, $contacto, $recolector, $observaciones; 


    #[On('showSample')]
    public function showSample($id){
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

        Flux::modal('show-sample')->show();

    }
    public function close(){
        Flux::modal('show-sample')->close();
        
    }







    public function render()
    {


        return view('livewire.sample-show');
    }
}

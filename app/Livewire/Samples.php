<?php

namespace App\Livewire;
use App\Models\Sample;
use Livewire\Component;
use Livewire\Attributes\On;
use Flux\Flux;

class Samples extends Component
{

    public $samples, $sampleid;

    public function mount()
    {
        $this->samples = Sample::all();
    }

    #[On('reloadSamples')]
    public function reloadSamples()
    {
        $this->samples = Sample::all();
    }

    public function edit($id)
    {
        $this->dispatch('editSample', $id);

    }

    public function show($id)
    {
        $this->dispatch('showSample', $id);

    }

    public function delete($id)
    {
        $this->sampleid = $id;
        Flux::modal('delete-sample')->show();

    }
    
    public function destroy(){
        Sample::find($this->sampleid)->delete();
        $this->reloadSamples();
        Flux::modal('delete-sample')->close();
    }

    public function render()
    {
        return view('livewire.samples');
    }
}

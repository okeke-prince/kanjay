<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LocationDetails extends Component
{

    public $locationId;

    public function mount($id)
    {
        $this->locationId = $id;
    }

    public function render()
    {
        return view('livewire.location-details', ['id' => $this->locationId]);
    }

}

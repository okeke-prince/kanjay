<?php

namespace App\Http\Livewire;

use App\Models\PageImage;
use Livewire\Component;

class HomePage extends Component
{
    public $homeImage_1;

    public function mount()
    {
        // Get the first image for the about section
        $this->homeImage_1 = PageImage::where('section', 'homepage_1')->first();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}

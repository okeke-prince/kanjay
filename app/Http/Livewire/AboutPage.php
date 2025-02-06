<?php

namespace App\Http\Livewire;

use App\Models\PageImage;
use Livewire\Component;

class AboutPage extends Component
{

    public $aboutImage;

    public function mount()
    {
        // Get the first image for the about section
        $this->aboutImage = PageImage::where('section', 'about_1')->first();
    }

    public function render()
    {
        return view('livewire.about-page');
    }
}

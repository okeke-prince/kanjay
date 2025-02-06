<?php

namespace App\Http\Livewire;

use App\Models\PageImage;
use Livewire\Component;

class Breadcrumb extends Component
{
    public $page;
    public $content;
    public $breadcrumbImage;

    public function mount($page = null, $content = null)
    {
        $this->page = $page;
        $this->content = $content;
        $this->breadcrumbImage = PageImage::where('section', 'breadcrumb')->first();
    }

    public function render()
    {
        return view('livewire.breadcrumb');
    }
}

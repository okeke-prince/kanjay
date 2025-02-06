<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Call2Action extends Component
{


    use LivewireAlert;

    public $email;

    public function submitForm()
    {
        $this->validate([
            'email' => 'required|email',
        ]);
    
        try {
            Subscriber::updateOrInsert(
                ['email' => $this->email],
                [
                    'email' => $this->email,
                    'created_at' => now(), // or use \Carbon\Carbon::now() if not using Laravel 8+
                ]
            );
    
            $this->alert('success', 'Subscription successful! Thank you for subscribing.');
            $this->resetComponent();
        } catch (\Exception $e) {
            $this->alert('error', 'Sorry, an error occurred. Please try again later.');
        }
    }
    

    private function resetComponent()
    {
        $this->email = null;
    }

    public function render()
    {
        return view('livewire.call2-action');
    }
}

<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ContactPage extends Component
{

    use LivewireAlert;

    public $name;
    public $email;
    public $phone;
    public $Mailsubject;
    public $message;

    public function submitForm()
    {

        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'Mailsubject' => 'required',
            'message' => 'required',
        ]);

        try {


            Mail::to('info@kanjay.ng')->send(new ContactMail(
                $this->name,
                $this->email,
                $this->phone,
                $this->Mailsubject,
                $this->message,
            ));

            $this->alert('success', 'Your message has been successfully sent. We will get back to you shortly!');
            $this->resetComponent();
        } catch (\Exception $e) {
            dd($e);
            $this->alert('error', 'Sorry, an error occurred. Please try again later');
        }
    }

    private function resetComponent()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->Mailsubject = null;
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.contact-page');
    }
}

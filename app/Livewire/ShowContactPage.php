<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required| email'
    ];

    public function submit(){
        $this->validate();

        $mailData = [
            'subject' => 'You have received a contact email',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('imamul190071@gmail.com')->send(new ContactEmail($mailData));
    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}

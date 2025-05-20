<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactForm as ContactFormModel;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        ContactFormModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
        ]);

        session()->flash('success', 'Message sent successfully!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

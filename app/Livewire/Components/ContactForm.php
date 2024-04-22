<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{

    #[Validate('required')]
    public string $name = '';

    #[Validate('required')]
    public string $email = '';

    #[Validate('required')]
    public string $phone = '';

    #[Validate('required')]
    public string $message = '';


    public function save()
    {
        $this->validate();

        dd($this->all());

//        return $this->redirect()->back();
    }


    public function render()
    {
        return view('livewire.components.contact-form');
    }
}

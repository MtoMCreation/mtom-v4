<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{

    #[Title('Contact')]

    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.contact');
    }
}

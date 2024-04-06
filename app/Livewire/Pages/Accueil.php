<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class Accueil extends Component
{

    #[Title('Accueil')]

    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.accueil');
    }

}

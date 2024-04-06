<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class Projets extends Component
{

    #[Title('Projets')]

    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.projets');
    }
}

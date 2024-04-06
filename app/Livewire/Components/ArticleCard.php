<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ArticleCard extends Component
{

    public $article;

    public function render()
    {
        return view('livewire.components.article-card');
    }
}

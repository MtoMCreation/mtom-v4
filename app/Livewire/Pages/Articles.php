<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Component;

class Articles extends Component
{

    #[Title('Articles')]


    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.articles', [
            'articles' => Article::all(),
//            'firstArticle' => Article::first(),
//            'otherArticles' => Article::orderBy('created_at', 'desc')->skip(1)->get()
        ]);
    }
}

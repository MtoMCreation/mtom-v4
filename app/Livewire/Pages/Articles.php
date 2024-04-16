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
        $articles = Article::all();

        return view('livewire.pages.articles', [
            'articles' => $articles,
            'firstArticle' => $articles->first(),
            'otherArticles' => $articles->slice(1),
        ]);
    }
}

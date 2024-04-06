<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;

class ArticleShow extends Component
{

    public Article $article;

    public function render(): \Illuminate\View\View
    {
        return view('livewire.pages.article-show', [
            'articles' => Article::where('id', '!=', $this->article->id)->latest()->take(3)->get()
        ]);
    }

}

<?php

namespace App\Filament\Resources\ArticleResource\Widgets;

use App\Models\Article;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NumberArticles extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Nombre d\'Articles', Article::all()->count()),
        ];
    }
}

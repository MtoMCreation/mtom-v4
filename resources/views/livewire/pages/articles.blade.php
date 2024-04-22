<x-slot:description>
    Tous nos articles
</x-slot:description>


<div class="container">
    <div class="py-20 ">
        <h1 class="text-[50px] font-bold text-center">Page des articles</h1>
    </div>

    <div class="mt-10">
        <div>
            <a href="{{ route('article-show', $firstArticle) }}" wire:navigate>
                <livewire:components.article-card :article="$firstArticle" :key="$firstArticle->id" lazy/>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($otherArticles as $article)
                <a href="{{ route('article-show', $article) }}" wire:navigate>
                    <livewire:components.article-card :article="$article" :key="$article->id" lazy/>
                </a>
            @endforeach
        </div>
    </div>
</div>


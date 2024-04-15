<x-slot:description>
    Tous nos articles
</x-slot:description>


<div class="container">
    <h1>Page des articles</h1>

    <div class="mt-10">
        <div class="flex flex-col md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($articles as $article)
                <a href="{{ route('article-show', $article) }}" wire:navigate>
                    <livewire:components.article-card :article="$article" :key="$article->id" lazy/>
                </a>
            @endforeach
        </div>
    </div>
</div>


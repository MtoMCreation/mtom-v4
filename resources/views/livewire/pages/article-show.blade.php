<div>
    <div class="container">
        <h1>Page de l'article</h1>
        <div class="mt-10 max-w-[800px] mx-auto">
            <img src="{{ asset('storage/' . $article->image) }}" alt="">
            <h2>{{ $article->title }}</h2>
        </div>
    </div>

    <div class="container mt-10">
        <h2>Articles similaires</h2>
        <div class="grid grid-cols-3 gap-4">
            @foreach($articles as $article)
                <a href="{{ route('article-show', $article) }}" wire:navigate>
                    <livewire:components.article-card :article="$article" :key="$article->id" lazy/>
                </a>
            @endforeach
    </div>
</div>

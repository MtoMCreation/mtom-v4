<div class="bg-blue-50">
    <div class="container">
        <h1>Page de l'article</h1>
        <div class="mt-10 max-w-[800px] mx-auto">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($article->image) }}" alt="">
            <h2>{{ $article->title }}</h2>

            <div>
                <p>{!! $article->content !!}</p>
            </div>
        </div>
    </div>

    <div class="container mt-10">
        <h2>Articles similaires</h2>
        <div class="grid grid-cols-3 gap-4">
            @foreach($articles as $article)
                <a href="{{ route('article-show', $article) }}" wire:navigate>
                    <livewire:components.article-card :article="$article" :key="$article->id"/>
                </a>
            @endforeach
    </div>
</div>

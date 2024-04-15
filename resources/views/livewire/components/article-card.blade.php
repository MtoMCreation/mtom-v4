<div class="card rounded overflow-hidden bg-gray-100">
    <div
        style="background-image: url({{ Storage::url($article->image) }});"
        class="h-[300px] bg-no-repeat bg-center bg-cover ">
    </div>

    <div class="p-6">
        <h2>{{ $article->title }}</h2>
    </div>
</div>

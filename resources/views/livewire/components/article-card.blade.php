<div class="card rounded overflow-hidden bg-gray-100">
    <div
        style="
            background-image: url({{ Storage::url($article->image) }});
            background-size: cover;
            background-position: center;
            height: 320px;">
    </div>

    <div class="p-10">
        <h2>{{ $article->title }}</h2>
    </div>

</div>

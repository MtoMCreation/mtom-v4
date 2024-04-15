<div class="card">
    <div
        style="
            height: 330px;
            background-image: url({{ Storage::url($article->image) }});
            background-repeat: no-repeat;
            background-position: center;">
    </div>

    <h2>{{ $article->title }}</h2>
</div>

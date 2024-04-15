<div class="card">
    <div
        style="
            height: 200px;
            background-image: url({{ asset($article->image) }});
            background-repeat: no-repeat;
            background-position: center;">
    </div>

{{--    <img src="{{ asset('storage/' . $article->image) }}" style="" alt="">--}}
    <h2>{{ $article->title }}</h2>
</div>

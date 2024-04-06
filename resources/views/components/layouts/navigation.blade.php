<nav class="flex items-center space-x-4">
    <a href="{{ route('articles') }}" wire:navigate="">Articles</a>
    <a href="{{ route('projets') }}" wire:navigate="">Projets</a>
    <a href="{{ route('contact') }}" wire:navigate>Contact</a>
    @auth()
        <a href="/admin">{{ auth()->user()->name }}</a>
    @else
        <a href="/admin">Se Connecter</a>
    @endauth
</nav>

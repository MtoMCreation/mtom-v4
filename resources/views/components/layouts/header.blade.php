<header>
    <nav class="container py-3 flex items-center justify-between">

        <a href="{{ route('accueil') }}" wire:navigate
           class="logo">
            <img src="{{ asset('storage/logo-mtom.webp') }}"
                 alt="logo mtom creation"
                 style="width: 80px; height: 80px;">
        </a>

        <nav class="flex items-center space-x-4">
            <a href="{{ route('services') }}" wire:navigate>Services</a>
            <a href="{{ route('articles') }}" wire:navigate>Articles</a>
            <a href="{{ route('projets') }}" wire:navigate>Projets</a>
            <a href="{{ route('contact') }}" wire:navigate>Contact</a>
        </nav>

        <div>
            @auth()
                <a href="/admin"
                   class="px-4 py-2 bg-gray-700 text-white rounded-full">
                    {{ auth()->user()->name }}
                </a>
            @else
                <a href="/admin"
                   class="px-4 py-2 bg-gray-700 text-white rounded-full">
                    Se Connecter
                </a>
            @endauth
        </div>

{{--        <x-layouts.navigation />--}}



    </nav>


</header>

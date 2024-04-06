<x-slot:title>
    Accueil
</x-slot:title>

<x-slot:description>
    Page accueil
</x-slot:description>


<div class="page-content">

    <!-- HERO SECTION -->
    <section class="hero min-h-[60vh] flex items-center bg-cover bg-center bg-no-repeat relative"
             style="background-image: url('{{ asset('storage/images/pages/home-hero.webp') }}')">
        <div class="container grid grid-cols-2">

            <div class="backdrop-blur-xs rounded p-12">
                <div class="flex space-x-2 items-center px-6 pl-0 py-0 border border-gray-800 rounded-full inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         class="w-6 h-6 -rotate-45">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <span>Développement & Accompagnement</span>
                </div>

                <h1 class="text-[5rem] font-medium">
                    Création de sites web et Stratégies Digitales
                </h1>
            </div>

        </div>
    </section>

</div>

<x-slot:title>
    Accueil
</x-slot:title>

<x-slot:description>
    Page accueil
</x-slot:description>


<section class="page-content">



    <!-- HERO SECTION -->
    <div class="hero_section">
        <div class="container grid grid-cols-2 gap-8">

            <div class="py-section">
                <h1 class="page_title text-[50px] font-bold">Une idée, un Projet ?</h1>
                <h1 class="page_title mt-2">Commençons</h1>
                <p class="page_description mt-8">
                    Whether you’re starting from scratch, or levelling-up an existing product suite, we bring experience and pragmatism that moves the needle on real business goals.

                    We’re experts at React, Next.js, Astro, and GraphQL. We’re internationally recognised for our work in design systems, content management systems, and front-end infrastructure. We sweat team productivity and practices. And we’d love to hear from you.
                </p>

                <div class="btn_box mt-10 flex space-x-6">
                    <a href="#" class="btn btn_primary">Notre expertise</a>
                    <a href="#" class="btn btn_outline">Nous contacter</a>
                </div>

            </div>

            <div>

            </div>

        </div>
    </div>

    <div class="">
        <div class="py-section bg-lightGray">
            <h1 class="page_title text-[50px] font-bold text-center">Nos Services</h1>
            <div class="container grid grid-cols-3 gap-8 mt-10">
                <div class="service_card">
                    <div class="service_card_icon">
                        <img src="{{ asset('images/icons/seo.png') }}" alt="">
                    </div>
                    <h1 class="service_card_title">SEO</h1>
                    <p class="service_card_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget et, sit amet.</p>
                </div>
                <div class="service_card">
                    <div class="service_card_icon">
                        <img src="{{ asset('images/icons/seo.png') }}" alt="">
                    </div>
                    <h1 class="service_card_title">SEO</h1>
                    <p class="service_card_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget et, sit amet.</p>
                </div>
                <div class="service_card">
                    <div class="service_card_icon">
                        <img src="{{ asset('images/icons/seo.png') }}" alt="">
                    </div>
                    <h1 class="service_card_title">SEO</h1>
                    <p class="service_card_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget et, sit amet.</p>
                </div>
            </div>
        </div>
    </div>



</section>

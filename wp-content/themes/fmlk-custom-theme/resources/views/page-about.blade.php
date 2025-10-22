@extends('layouts.app')

@section('content')

    <h1 class="text-5xl my-20">About Us</h1>
    <section class="pt-5 my-20 flex flex-col md:flex-row items-center gap-10">
        <div class="flex flex-col gap-5 lg:w-1/2">
            <h2 class="text-5xl font-bold text-primary text-center lg:text-left">Our history</h2>
            <p>
                Fat Man Little Kitchen is the creation of Chef Marcel, an Indigenous chef passionate about
                blending cultural tradition with modern culinary innovation.
            </p>
            <p>
                What started as a food truck has grown into a dynamic business offering both high-quality catering services
                and a signature line of handcrafted hot sauces.
            </p>
            <p>
                Rooted in creativity, resilience, and community, FMLK celebrates the flavours of Indigenous cuisine while
                supporting local ingredients, sustainable practices, and meaningful food connections.
            </p>
        </div>
        <img src="{{ get_stylesheet_directory_uri() }}/resources/images/CAB_logo.jpg" class="w-full lg:w-1/2 h-auto"
            alt="CAB logo">
    </section>

    <section class="pt-5 my-20 flex flex-col-reverse md:flex-row items-center gap-10">
        <img src="{{ get_stylesheet_directory_uri() }}/resources/images/CAB_logo.jpg"
            class="w-full lg:w-1/2 h-auto order-1 lg:order-1" alt="CAB logo">
        <div class="flex flex-col gap-5 lg:w-1/2 order-2 lg:order-2">
            <h2 class="text-5xl font-bold text-primary text-center lg:text-left">Meet Marcell</h2>
            <p>
                Chef Maurice Martel is the creative force behind Fat Man Little Kitchen, blending his Indigenous heritage
                with a passion for bold, modern flavours.
            </p>
            <p>
                In 2022, he launched FMLK to share dishes and hot sauces that celebrate culture, community, and storytelling
                through food.
            </p>
        </div>
    </section>


    <section class="my-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <a href="#" class="bg-black text-white rounded-md px-6 py-3 hover:bg-red-600 transition">
            Request Catering
        </a>
        <a href="#" class="bg-black text-white rounded-md px-6 py-3 hover:bg-red-600 transition">
            Contact Us
        </a>
        <a href="#" class="bg-black text-white rounded-md px-6 py-3 hover:bg-red-600 transition">
            Shop
        </a>
    </section>

    <section class="my-20">
        <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-red-600 text-white">
            <h3 id="accordion-color-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-white border border-b-0 border-gray-700 rounded-t-xl focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                    aria-controls="accordion-color-body-1">
                    <span>Where can I find your hot sauces?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="p-5 border border-b-0 border-gray-700 bg-black text-white">
                    <p class="mb-2">You can buy our sauces online in our <a href="shop"
                            class="text-red-500 hover:underline">shop</a></p>
                    <p>But if you can't wait for them to ship check out these <a href="/docs/getting-started/introduction/"
                            class="text-red-500 hover:underline">stores</a> where you can pick them up in person.
                    </p>
                    <p>Or come visit us at the next <a href="/docs/getting-started/introduction/"
                            class="text-red-500 hover:underline">event</a> we are attending.
                    </p>
                </div>
            </div>

            <h3 id="accordion-color-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-white border border-b-0 border-gray-700 focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                    aria-controls="accordion-color-body-2">
                    <span>Is there a Figma file available?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="p-5 border border-b-0 border-gray-700 bg-black text-white">
                    <p class="mb-2">Flowbite is first conceptualized and designed using Figma, so everything you see in the
                        library has a design equivalent in Figma.</p>
                    <p>Check out the <a href="https://flowbite.com/figma/" class="text-red-500 hover:underline">Figma design
                            system</a>.</p>
                </div>
            </div>

            <h3 id="accordion-color-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-white border border-gray-700 focus:ring-1 focus:ring-red-400 hover:bg-red-600 gap-3"
                    data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                    aria-controls="accordion-color-body-3">
                    <span>What are the differences between Flowbite and Tailwind UI?</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h3>
            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="p-5 border border-t-0 border-gray-700 bg-black text-white">
                    <p class="mb-2">The core components from Flowbite are open source under MIT license, whereas Tailwind UI
                        is paid. Flowbite relies on smaller components; Tailwind UI offers page sections.</p>
                    <p class="mb-2">You can actually use both Flowbite and Tailwind UI together.</p>
                    <p class="mb-2">Learn more:</p>
                    <ul class="ps-5 list-disc">
                        <li><a href="https://flowbite.com/pro/" class="text-red-500 hover:underline">Flowbite Pro</a></li>
                        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-red-500 hover:underline">Tailwind
                                UI</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



@endsection
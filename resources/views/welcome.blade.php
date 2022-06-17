<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .hero-card::after {
                content: '';
                position: absolute;
                bottom: -.5rem;
                left: 0;
                right: 0;
                width: 100%;
                height: 100%;
                background: black;
                border-radius: 0.75rem;
                z-index: -2;
            }

            .hero-picture-container::before {
                content: '';
                position: absolute;
                bottom: -.2rem;
                left: 0;
                right: 0;
                width: 100%;
                height: 100%;
                background: black;
                border-radius: 0.75rem;
            }

            .hero-picture-container::after {
                content: '';
                position: absolute;
                inset: 0;
                border: 2px solid black;
                width: 100%;
                height: 100%;
                border-radius: 0.75rem;
                left: 0;
                right: 0;
                top: 0;
                bottom: 1rem;
            }

            .btn-hero::before {
                content: '';
                position: absolute;
                bottom: -.4rem;
                left: 0;
                right: 0;
                width: 100%;
                height: 100%;
                background: black;
                border-radius: 0.75rem;
                z-index: -1;
            }
        </style>
    </head>
    <body>
        <section class="pt-24 mx-auto w-max">
            <div class="relative max-w-xl p-6 space-y-6 bg-white border-2 border-black rounded-xl hero-card">
                <div class="flex items-center gap-6">
                    <div class="relative w-20 h-20 hero-picture-container">
                        <img class="relative object-cover object-center w-full h-full rounded-xl" src="imgs/avatar.webp" alt="">
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold">Franco La Mattina</h2>
                        <h4 class="text-sm tracking-widest">FULL STACK WEB DEVELOPER</h4>
                    </div>
                </div>
                <p class="text-xl">23 y/o. Based in Buenos Aires. I believe limitations grant commitments and commitments deliver beautiful design systems, that scale.</p>
                <div class="relative z-10 flex items-baseline justify-between">
                    <h5 class="text-sm font-bold">bicicura.com</h5>
                    <button class="relative px-8 py-2 text-base text-white border-2 border-black bg-blue rounded-xl btn-hero" type="button">Message</button>
                </div>
            </div>
        </section>

        <section class="pb-24 mx-auto mt-24 space-y-6">
            <h2 class="text-3xl font-bold text-center">LATEST PROJECTS</h2>
            <div class="relative grid w-full max-w-4xl grid-cols-2 mx-auto border-2 border-black divide-x-2 divide-black hero-card bg-water-green rounded-xl">
                <div></div>
                <div>
                    <div class="w-10/12 p-6 space-y-6">
                        <h2 class="text-3xl font-bold ">Street Agency</h2>
                        <p>The first remote platform that facilitates the understanding of ideas through attachable multimedia nodes.</p>
                        <div class="flex flex-wrap gap-3">
                            <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">Laravel</div>
                            <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">Livewire</div>
                            <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">Alpine JS</div>
                            <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">MySQL</div>
                            <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">Tailwind</div>
                        </div>
                        <div class="relative z-10">
                            <button class="relative px-8 py-2 text-base font-bold text-black border-2 border-black bg-yellow rounded-xl btn-hero" type="button">view project</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-24 mx-auto w-max">
            <h2 class="text-3xl font-bold text-center">CONTACT</h2>
            <form action="" class="relative grid max-w-xl grid-cols-2 gap-6 p-6 bg-white border-2 border-black rounded-xl hero-card">
                <div class="grid grid-rows-3 gap-4">
                    <label class="block" for="name">
                        <span class="text-sm font-bold">Full name</span>
                        <input type="text" id="name" class="block p-3 text-base border-2 border-black rounded-xl" placeholder="Full name">
                    </label>
                    <label class="block" for="email">
                        <span class="text-sm font-bold">Email</span>
                        <input type="text" id="email" class="block p-3 text-base border-2 border-black rounded-xl" placeholder="Email address">
                    </label>
                    <label class="block" for="phone">
                        <span class="text-sm font-bold">Phone</span>
                        <input type="text" id="phone" class="block p-3 text-base border-2 border-black rounded-xl" placeholder="Phone number">
                    </label>
                </div>
                <div class="flex flex-col justify-between gap-12">
                    <label for="message" class="flex flex-col items-stretch h-full row-span-2 justify-items-stretch">
                        <span class="text-sm font-bold">Message</span>
                        <textarea class="block w-full h-full p-3 border-2 border-black rounded-xl border-xl" name="" id="message" placeholder="Your message here..."></textarea>
                    </label>
                    
                    <div class="relative z-10 block rows-span-1">
                        <button class="relative w-full px-8 py-2 text-base text-white border-2 border-black bg-blue rounded-xl btn-hero" type="button">Message</button>
                    </div>
                </div>
            </form>
        </section>
        
    </body>
</html>

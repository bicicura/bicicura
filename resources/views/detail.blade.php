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
            <div class="flex items-center gap-3">
                <div class="w-16 h-12 bg-black rounded-2xl"></div>
                <h1 class="text-3xl font-bold">mytaggie</h1>
            </div>
            <h2 class="text-sm">The first remote platform that facilitates the understanding of ideas through attachable multimedia nodes.</h2>
        </section>

        <section class="pb-24 mx-auto mt-24 space-y-6">
            <div class="relative grid w-full max-w-4xl grid-cols-2 py-56 mx-auto border-2 border-black hero-card bg-water-green rounded-xl">
                <div class="absolute top-0 bottom-0 flex items-center justify-center w-20 h-20 my-auto border-2 border-black rounded-full cursor-pointer -left-10 bg-blue">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                </div>
                <div class="absolute top-0 bottom-0 flex items-center justify-center w-20 h-20 my-auto border-2 border-black rounded-full cursor-pointer -right-10 bg-blue">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-wrap gap-3 mx-auto w-max">
                <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">Laravel</div>
                <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">Livewire</div>
                <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">Alpine JS</div>
                <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">MySQL</div>
                <div class="px-3 py-1 bg-white border-2 border-black border-dashed w-max rounded-xl">TailwindCSS</div>
            </div>
        </section>

        <section class="max-w-4xl pb-24 mx-auto">
            <div class="grid grid-cols-3 gap-3">
                <div class="relative w-full p-3 bg-white border-2 border-black rounded-xl hero-card">
                    <h4 class="text-xs tracking-widest uppercase">Industry</h4>
                    <p class="text-xl">Project managment software</p>
                </div>
                <div class="relative w-full p-3 bg-white border-2 border-black rounded-xl hero-card">
                    <h4 class="text-xs tracking-widest uppercase">CLIENT • Arquitect</h4>
                    <p class="text-xl">Adrian Alvarado</p>
                </div>
                <div class="relative w-full p-3 bg-white border-2 border-black rounded-xl hero-card">
                    <h4 class="text-xs tracking-widest uppercase">Industry</h4>
                    <p class="text-xl">Project managment software</p>
                </div>
            </div>
        </section>

        <section class="pb-24 mx-auto mt-24 space-y-6">
            <div class="relative grid w-full max-w-4xl grid-cols-3 gap-3 mx-auto">
                <div class="relative col-span-2 border-2 border-black bg-blue rounded-xl hero-card"></div>
                <div class="relative px-8 py-16 bg-white border-2 border-black rounded-xl hero-card">
                    <h3 class="font-bold uppercase">Wireframes</h3>
                    <p>The wide collection of functional components in the UI required an extensive wireframing phase.</p>
                </div>
            </div>
        </section>

        <section class="pb-24 mx-auto mt-24 space-y-6">
            <div class="relative grid w-full max-w-4xl grid-cols-3 gap-3 mx-auto">
                <div class="relative col-span-2 border-2 border-black bg-blue rounded-xl hero-card"></div>
                <div class="relative px-8 py-16 bg-white border-2 border-black rounded-xl hero-card">
                    <h3 class="font-bold uppercase">Functional Components</h3>
                    <p>With colors and design guidelines in place, components successfully merged with the playful tone acrross taggie´s brand image.</p>
                </div>
            </div>
        </section>

        <section class="max-w-4xl pb-24 mx-auto">
            <div class="grid grid-cols-3 gap-3">
                <div class="relative flex w-full gap-3 p-3 bg-white border-2 border-black rounded-xl hero-card">
                    <div class="flex-none w-16 h-16 bg-black rounded-2xl"></div>
                    <div class="flex flex-col justify-around">
                        <h4 class="text-xs tracking-widest uppercase">Industry</h4>
                        <p class="text-base leading-tight">Project managment software</p>
                    </div>
                </div>
                <div class="relative flex w-full gap-3 p-3 bg-white border-2 border-black rounded-xl hero-card">
                    <div class="flex-none w-16 h-16 bg-black rounded-2xl"></div>
                    <div class="flex flex-col justify-around">
                        <h4 class="text-xs tracking-widest uppercase">Validate</h4>
                        <p class="text-base leading-tight">Share project related polls for feedback.</p>
                    </div>
                </div>
                <div class="relative flex w-full gap-3 p-3 bg-white border-2 border-black rounded-xl hero-card">
                    <div class="flex-none w-16 h-16 bg-black rounded-2xl"></div>
                    <div class="flex flex-col justify-around">
                        <h4 class="text-xs tracking-widest uppercase">Collaborate</h4>
                        <p class="text-base leading-tight">Take on team projects collaboratively.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-4xl pb-24 mx-auto space-y-3">
            <h3 class="font-bold text-center uppercase">API Integrations</h3>
            <div class="grid items-center justify-center grid-cols-2 gap-3">
                <div class="relative flex w-2/3 gap-3 p-3 ml-auto bg-white border-2 border-black rounded-xl hero-card">
                    <div class="flex-none w-16 h-16 bg-black rounded-2xl"></div>
                    <div class="flex flex-col justify-around">
                        <h4 class="text-xs tracking-widest uppercase">GOOGLE-AUTH</h4>
                        <p class="text-base leading-tight">User creation and authentication</p>
                    </div>
                </div>
                <div class="relative flex w-2/3 gap-3 p-3 bg-white border-2 border-black rounded-xl hero-card">
                    <div class="flex-none w-16 h-16 bg-black rounded-2xl"></div>
                    <div class="flex flex-col justify-around">
                        <h4 class="text-xs tracking-widest uppercase">Paypal</h4>
                        <p class="text-base leading-tight">Dynamic user subsciptions.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="pt-24 pb-24 mx-auto w-max">
            <div class="relative max-w-xl p-6 space-y-6 bg-white border-2 border-black rounded-xl hero-card">
                <div class="flex items-center gap-6">
                    <div class="relative w-20 h-20 hero-picture-container">
                        <img class="relative object-cover object-center w-full h-full rounded-xl" src="imgs/avatar.webp" alt="">
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold">Adrian Alvarado</h2>
                        <h4 class="text-sm tracking-widest">CEO</h4>
                    </div>
                </div>
                <p class="text-xl">"Juan went above and beyond in terms of quality. The webapp's functionality is top-notch."</p>
            </div>
        </section>

        <section class="max-w-4xl pb-24 mx-auto mt-24 space-y-6">
            <h2 class="text-3xl font-bold">MORE WORK IN ACTION</h2>
            <div class="relative grid w-full grid-cols-2 mx-auto border-2 border-black divide-x-2 divide-black hero-card bg-water-green rounded-xl">
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

            <div class="flex items-center w-full h-6 px-1 overflow-hidden bg-black rounded-xl">
                <div class="z-10 w-8/12 h-4 my-auto text-white rounded-xl bg-water-green"></div>
            </div>
        </section>

    </body>
</html>
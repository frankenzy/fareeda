@extends('layouts.app')

@section('content')
    <div class="overflow-hidden bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div class="relative min-h-screen flex flex-col items-center w-full selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full">

                <main class="mt-0 w-full">

                    <x-full-page class="overflow-hidden h-full sm:grid-cols-1 bg-full-background">

                        <div class="flex px-6 py-2 w-full bg-center bg-no-repeat bg-cover"
                            style="height: 45rem; background-image: url('/images/background.jpg')">

                            <div class="absolute inset-0 bg-black opacity-60"></div>

                            <div class="flex relative justify-between items-center mx-auto max-w-2xl h-full lg:max-w-7xl">
                                <div class="flex lg:col-span-10">
                                    <div
                                        class="w-70 items-start gap-4 rounded-lg  p-6 ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">

                                        <h3 class="text-5xl text-white text-bold text-start">
                                            Gérer votre restaurant
                                            Fareeda
                                        </h3>

                                        <p class="mt-5 text-2xl text-white">
                                            Nous vous offrons un ensemble complet d'outils de gestion pour optimiser la
                                            gestion
                                            de votre restaurant.

                                        </p>


                                    </div>
                                </div>

                                <div class="flex lg:col-span-2" style="width: 30rem ; height: 24rem;">
                                    <img src="{{ asset('images/scan-code.png') }}" alt="scane code" class="w-full" />
                                </div>
                            </div>

                        </div>
                    </x-full-page>

                    <div
                        class="flex overflow-hidden grid-cols-2 justify-between p-4 mx-auto my-4 max-w-2xl lg:max-w-7xl sm:grid-cols-1 bg-full-background">



                        <div class="flex grid-cols-9">
                            <div
                                class="flex items-start text-2xl gap-4  p-6 ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20] font-bold">
                                {{ __('Fareeda') }}
                            </div>
                        </div>



                        <div class="flex grid-cols-3">

                            <div
                                class="flex items-start gap-4 rounded-lg bg-white ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="device-wrapper animated">
                                    <div class="device" data-device="iPhone" data-orientation="portrait" data-color="black">
                                        <div class="screen">
                                            <iframe width="360" height="550"
                                                src="https://www.youtube.com/embed/?autoplay=1&amp;loop=1&amp;controls=0&amp;showinfo=0&amp;modestbranding=1&amp;rel=0&amp;iv_load_policy=3&amp;playlist="
                                                frameborder="0" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>
@endsection

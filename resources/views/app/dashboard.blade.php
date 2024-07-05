@extends('layouts.app')

@php
    $count = 16;
@endphp

@section('content')
    <div class="p-6 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

        {{-- Barre de recherche --}}
        <div class="overflow-hidden p-6 bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="w-full">
                @include('partials.search_form')
                <div class="flex mt-8 w-full">
                    <div class="flex flex-wrap -mx-4">
                        @for ($i = 0; $i < 12; $i++)
                            @php
                                $image = 'images/Samer.jpg';
                                $auteur = Fake()->name();
                                $description = Fake()->text(15);

                            @endphp
                            <div class="px-4 mb-4 w-1/3">
                                <a href="{{ route('menu.index') }}" rel="noopener noreferrer"
                                    class="font-semibold text-blue-500 hover:text-blue-700">

                                    <x-card-component :image="$image" :title="$auteur" :description="$description"
                                        :infos="[
                                            ['icon_color' => 'text-blue-500', 'value' => 'Info 1'],
                                            ['icon_color' => 'text-green-500', 'value' => 'Info 2'],
                                            ['icon_color' => 'text-yellow-500', 'value' => 'Info 3'],
                                        ]" />
                                </a>
                            </div>
                        @endfor
                    </div>

                </div>
            </div>
        </div>
        {{-- fin section de recherche --}}

        {{-- section de contenu --}}
    </div>

    <x-footer class="justify-center mx-auto bg-gray-100" />

@endsection

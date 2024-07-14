@extends('layouts.app')

@php
    $imagePath = 'images/Samer.jpg'; // Chemin de l'image par défaut
    $totalRestaurant = count($restaurants);
@endphp

@section('content')
    <div class="flex-grow-0 p-6 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" x-data="{ restaurants: [] }" x-init="fetchData()">
        <div class="p-6 bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="w-full">
                @include('partials.search_form')
                <div class="flex mt-8 w-full">
                    <div class="flex flex-wrap -mx-4">
                        @foreach ($restaurants as $restaurant)
                            <div class="px-4 mb-4 w-1/3">
                                <a href="{{ route('restaurants.show',$restaurant->id) }}" rel="noopener noreferrer"
                                    class="font-semibold text-blue-500 hover:text-blue-700">
                                    <x-card-component :image="asset('images/restaurants/'.$restaurant->logo)" :title="$restaurant->nom" :description="$restaurant->description" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer class="justify-center mx-auto bg-gray-100 ticky" />
@endsection
<script>
    function fetchData() {
        fetch('/restaurants') // Utilisez l'URL relative pour restaurants.index
            .then(response => response.json())
            .then(data => {
                // Mettre à jour les données dans Alpine
                restaurants = data;
            });
    }
</script>

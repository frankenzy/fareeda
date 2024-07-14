@extends('layouts.app')

@section('content')
    <div class="p-6 px-4 mt-4 mb-0 bg-gray-100 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <!-- Liste des catégories -->
            <div class="flex overflow-x-auto p-4 space-x-4">
                <div class="flex overflow-x-auto gap-3 px-4 py-2 mx-2 whitespace-nowrap rounded-lg">
                    <a href="#"
                        class="flex items-center px-6 py-4 font-bold text-white bg-orange-400 rounded-lg border-transparent shadow-md hover:bg-orange-400">
                        <i class="mr-4 fa fa-bars"></i>
                        {{ __('Tout') }}
                    </a>

                    @foreach ($categories as $categorie)
                        <a href="#"
                            class="flex items-center px-6 py-4 font-bold text-gray-800 bg-white rounded-lg border-transparent shadow-md hover:bg-orange-400">
                            {{ $categorie->nom }}
                        </a>
                        @if (!$loop->last)
                            <span class="inline-block mx-2 w-px h-4 bg-gray-300"></span> <!-- Séparateur -->
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Barre de recherche --}}
            <div class="flex overflow-x-auto justify-between items-center py-6 w-full border-t dark:border-gray-700">
                <div class="w-full">
                    <div class="flex mt-8 w-full">
                        <div class="flex flex-wrap -mx-4">
                            @foreach ($categories as $categorie)
                                <div class="flex relative justify-between px-4 my-auto mb-4 w-full border-b-2 border-gray-200">
                                    <div class="flex text-2xl font-bold capitalize">{{ $categorie->nom }}</div>
                                    <div class="flex text-orange-400">
                                        <a href="#" class>Voir plus</a>
                                        <i class="mt-1 ml-2 fa fa-angle-right"></i>
                                        <i class="mt-1 fa fa-angle-right"></i>
                                    </div>
                                </div>

                                @foreach ($categorie->menus as $item)
                                    @php
                                        $image = 'images/Samer.jpg';
                                        $auteur = Fake()->name();
                                        $description = Fake()->text(15);
                                        $prix = '3000';
                                    @endphp

                                    <div class="px-4 mb-4 w-1/3">
                                        <x-menu-card :image="$image" :title="$item->nom" :description="$item->description" :prix="$item->prix">
                                            <div id="crud-modal" tabindex="-1" x-data="{ quantity: 1 }" x-init="quantity = $refs.quantityInput.value" aria-hidden="true" class="hidden overflow-y-auto fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <input type="hidden" x-ref="quantityInput" id="quantity-input" name="quantity" value="1">

                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <div class="flex justify-between items-center p-4 rounded-t border-b dark:border-gray-600">
                                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $item->nom }}</h3>
                                                            <button type="button" class="inline-flex justify-center items-center w-8 h-8 text-sm text-orange-700 rounded-lg hover:text-orange-900 ms-auto dark:hover:bg-orange-600"  @click="open = false">X</button>
                                                        </div>
                                                        <form class="p-4 md:p-5" @submit.prevent="addToCart('{{ addslashes($image) }}', '{{ addslashes($auteur) }}', '{{ addslashes($item->description) }}', '{{ addslashes($item->prix) }}', quantity)">
                                                            <div class="grid gap-4 mb-4">
                                                                <div class="w-full">
                                                                    <img src="{{ asset('images/salade.jpeg') }}" alt="produit" class="object-cover w-96 h-96" />
                                                                </div>
                                                                <div>
                                                                    <h3>{{ $item->auteur }}</h3>
                                                                </div>
                                                                <div>
                                                                    <p>{{ $item->prix }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex col-span-2 justify-between">
                                                                <div>
                                                                    <button type="button" @click="quantity = Math.max(quantity - 1, 1)" class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-gray-700">-</button>
                                                                    <span x-text="quantity"></span>
                                                                    <button type="button" @click="quantity++" class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-gray-700">+</button>
                                                                </div>
                                                                <div>
                                                                    <button type="submit"
                                                                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 focus:outline-none focus:ring-orange-300"
                                                                     @click="total = quantity">
                                                                        Ajouter au panier
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </x-menu-card>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- Fin de la section de recherche --}}
        </div>
    </div>
    <x-footer class="justify-center mx-auto mt-0 bg-gray-100" />

    <script>
        function addToCart(image, auteur, description, prix, quantity) {
            let commande = {
                images: image,
                auteur: auteur,
                description: description,
                prix: prix,
                quantity: quantity
            };
            sessionStorage.setItem("commande", JSON.stringify(commande));
            console.log('Commande:', commande);
        }
    </script>
@endsection

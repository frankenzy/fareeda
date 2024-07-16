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
                                <div
                                    class="flex relative justify-between px-4 my-auto mb-4 w-full border-b-2 border-gray-200">
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

                                    <div class="px-4 mb-4 w-1/3" x-data>
                                        <a href="#" class="w-full" @click="initialize">
                                            <x-modal class="w-full">
                                                <x-slot name="button">
                                                    <x-menu-card :image="$image" :title="$item->nom" :description="$item->description"
                                                        :prix="$item->prix">
                                                    </x-menu-card>
                                                </x-slot>
                                                <x-slot name='title'>
                                                    {{ $item->nom }}
                                                </x-slot>
                                                <x-slot name="content">
                                                    <form class="p-4 md:p-5"
                                                        @submit.prevent="addToCart('{{ addslashes($image) }}', '{{ addslashes($auteur) }}', '{{ addslashes($item->description) }}', '{{ addslashes($item->prix) }}', quantity)">
                                                        <div class="grid gap-4 mb-4">
                                                            <div class="w-full">
                                                                <img src="{{ asset('images/salade.jpeg') }}" alt="produit"
                                                                    class="object-cover rounded-xl shadow-sm w-100 h-100"/>
                                                            </div>
                                                            <div>
                                                                <h3>{{ $item->nom }}</h3>
                                                            </div>
                                                            <div>
                                                                <p class="text-2xl font-bold text-orange-500 price">{{ $item->prix }}</p>
                                                            </div>

                                                            <div>
                                                                <x-input-label value='Ajouter un commentaire' id='order_textarea_comment'/>
                                                                <x-text-area/>
                                                            </div>
                                                        </div>

                                                       <x-slot name='footer'>
                                                        <div class="flex col-span-2 justify-between">
                                                            <div class='flex items-center'>
                                                                <button type="button"
                                                                    @click="quantity = Math.max(quantity - 1, 1)"
                                                                    class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-gray-700">-</button>
                                                                <span x-text="quantity" class="content-center mx-4 items"></span>
                                                                <button type="button" @click="quantity++"
                                                                    class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-gray-700">+</button>
                                                            </div>
                                                            <div class='flex items-center'>
                                                                <p x-data="{ total: 1, prix: {{ $item->prix }} }" class="px-4 text-orange-500">
                                                                    Total <span x-text="total * prix"></span>
                                                                </p>
                                                                <button type="submit" data-modal-hide="default-modal"
                                                                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 focus:outline-none focus:ring-orange-300"
                                                                    @click="total = quantity">
                                                                    Ajouter au panier
                                                                </button>
                                                            </div>
                                                        </div>
                                                       </x-slot>
                                                    </form>
                                                </x-slot>
                                            </x-modal>
                                        </a>
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
        import * as menu from './resources/js/menu.js';
        let init = function init() {
            return {
                ...menu.data(),
                getAllMenus: menu.getAllMenus
            };
        }
    </script>

    {{-- <script>
        let init = function init() {
            consol.log('hello');
        }
    </script> --}}
@endsection
{{-- function loadModal() {
    console.log('loading modal...');
     // document.getElementById('crud-modal').classList.remove('hidden');
 }

 function menu_detail(){
     return menu;

 }
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
 } --}}

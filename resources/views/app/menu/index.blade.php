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
                                    <a href="#">Voir plus</a>
                                    <i class="mt-1 ml-2 fa fa-angle-right"></i>
                                    <i class="mt-1 fa fa-angle-right"></i>
                                </div>
                            </div>
                            @foreach ($categorie->menus as $item)
                                @php
                                    $image = 'images/Samer.jpg';
                                @endphp
                                <div class="px-4 mb-4 w-1/3" x-data="{ order: 0, quantity: 1, prix: {{ $item->prix }} }">
                                    <a href="#" class="w-full">
                                        <x-modal :id="$item->id" class="w-full">
                                            <x-slot name="button">
                                                <x-menu-card :image="$image" :title="$item->nom" :description="$item->description"
                                                    :prix="$item->prix">
                                                </x-menu-card>
                                            </x-slot>
                                            <x-slot name='title'>
                                                {{ $item->nom }}
                                            </x-slot>
                                            <x-slot name="content">
                                                <form class="p-4 md:p-5" @csrf>
                                                    <div class="grid gap-4 mb-4">
                                                        <div class="w-full">
                                                            <img src="{{ asset('images/salade.jpeg') }}" alt="produit"
                                                                class="object-cover rounded-xl shadow-sm w-100 h-100" />
                                                        </div>
                                                        <div>
                                                            <h3>{{ $item->nom }}</h3>
                                                        </div>
                                                        <div>
                                                            <p class="text-2xl font-bold text-orange-500 price">
                                                                {{ $item->prix }}</p>
                                                        </div>

                                                        <div>
                                                            <x-input-label value='Ajouter un commentaire'
                                                                id='order_textarea_comment' />
                                                            <x-text-area />
                                                        </div>
                                                    </div>

                                                    <x-slot name='footer'>
                                                        <div class="flex col-span-2 justify-between">
                                                            <div class='flex items-center'>
                                                                <button type="button" @click="quantity = Math.max(quantity - 1, 1)"
                                                                    class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-gray-700">-</button>
                                                                <span x-text="quantity" class="content-center mx-4 items"></span>
                                                                <button type="button" @click="quantity++"
                                                                    class="px-3 py-1 text-sm text-gray-700 bg-gray-200 rounded-lg dark:text-white dark:bg-gray-700">+</button>
                                                            </div>
                                                            <div class='flex items-center'>
                                                                <p class="px-4 text-orange-500">
                                                                    Total <span x-text="`${quantity}x${prix}`"></span>
                                                                </p>

                                                                <button data-modal-hide="default-modal-{{ $item->id }}"
                                                                    class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-orange-500 rounded-lg focus:ring-4 focus:outline-none focus:ring-orange-300"
                                                                    @click="order++; addToCart('{{ addslashes($item->id) }}', quantity,$event)">
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
    </div>
</div>
<x-footer class="justify-center mx-auto mt-0 bg-gray-100" />

<script>
    function initialize() {
        console.log('reloading page and initializing nombre to 1');
        nombre = 1;
        order = 0;
    }

    function addToCart(id,quantity,event) {
        event.preventDefault();
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let data = {
            id: id,
            quantity: quantity
        };
        fetch('/panier/store', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify(data),
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors de l\'ajout de la commande');
            }
            return response.json();
        })
        .then(data => {
            order++;
            console.log('Commande ajoutée avec succès:', order);
            setLocalStorage('order', order);
            reload()
        })
        .catch(error => {
            console.error('Erreur lors de l\'ajout de la commande:', error);
        });
    }

    function setLocalStorage($key, $value) {
        localStorage.setItem($key, $value);
        console.log('data added to localStorage');
    }

    function reload(){
        window.location.reload();
    }
</script>
@endsection

@extends('layouts.app')

@section('content')
    <script>
        function init() {
            return {
                order: function() {
                    let order = JSON.parse(localStorage.getItem('order')) || [];
                    console.log("Nombre total de commande", order)
                    return order;
                },
                basket: function() {
                    var basketData = localStorage.getItem('basket');
                    console.log(basketData);
                    return basketData ? JSON.parse(basketData) : [];
                },
            };
        }
    </script>

    <div class="justify-center content-center items-center h-full" x-data=init()>
        <div class="grid grid-cols-1 gap-2 lg:grid-cols-3 sm:w-full">

            <h2 class="content-center text-center">Valider ma commande</h2>
            <div>
                <div class="flex flex-wrap gap-4 p-4">

                    <template x-for="item in basket" :key="item.id">
                        <div class="p-2 w-full bg-white rounded-lg shadow-md lg:w-40 text-x">
                            <div class="flex justify-end mt-1">
                                <button type="button" class="text-red-600 hover:text-red-800 focus:outline-none">
                                    <i class="icofont-close-line"></i>X
                                </button>
                            </div>
                            <div class="flex">
                                <!-- Quantity control buttons -->
                                <div class="flex flex-col bg-gray-200 rounded-lg me-2">
                                    <button type="button"
                                        class="px-3 py-1 text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                        @click="quantity = Math.max(quantity - 1, 1); total = total -1 ">-</button>

                                    <span x-text="quantity"
                                        class="px-3 py-1 text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500">1</span>

                                    <button type="button"
                                        class="px-3 py-1 text-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                        @click="quantity = quantity + 1; total = total + 1">+</button>
                                </div>
                                <div class="flex justify-around items-center mb-4">
                                    <!-- Image -->
                                    <img src="https://www.fareeda.pro/uploads/thumb/bc2a1c42faafab8483e14c359b885789.jpg"
                                        alt="item_img" class="w-8 h-8 rounded-md">

                                    <div class="ms-2">
                                        <h3 class="font-semibold" x-text="item.nom"></h3>
                                        <p class="text-red-600 hover:text-red-800">Quantité: <span x-text='item.quantity'></span></p>
                                        <p class="text-gray-600">
                                            <span x-text='item.prix'></span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </template>

                </div>
                <div>
                    <form class="w-full form">
                        <div class="flex gap-2 m-2">
                            <div>
                                <x-input-label :value="'Nom*'" />
                                <x-text-input />
                            </div>
                            <div>
                                <x-input-label :value="'Telephone*'" />
                                <x-text-input />
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="my-2">
                                <x-input-label :value="'Type de commande'" />
                                <x-select-input />
                            </div>
                            {{-- Livraison --}}
                            <x-text-input placeholder="Adresse" />

                            <x-text-input placeholder="Google map adresse" />

                            <div class="flex my-4">
                                <x-check-box-input type="checkbox" />
                                <x-input-label :value="'J ai besoin de monnaie'" />
                            </div>
                            {{-- fin livraison --}}
                            <div class="my-4 text-area">
                                <textarea id="description" rows="2"
                                    class="block p-2.5 w-11/12 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"
                                    placeholder="Laisser quelques détails par rapports à votre commande"></textarea>
                            </div>
                            <button class="p-4 text-xs text-white bg-orange-500 rounded">Valider la commande</button>
                    </form>
                </div>
            </div>


        </div>

    </div>
@endsection

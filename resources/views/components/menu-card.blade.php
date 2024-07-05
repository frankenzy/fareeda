<!-- CardComponent.blade.php -->
@props(['image' => '', 'title' => '', 'description' => '', 'infos' => [], 'prix', 'auteur' => '', 'id' => ''])

<div class="overflow-hidden bg-white rounded-lg shadow-md">
    <div class="relative items-center grid-row">


        <a href="javascript:void(0)" class="flex" data-modal-target="crud-modal"
        @click="addToCart($event, '{{ addslashes($image) }}', '{{ addslashes($auteur) }}', '{{ addslashes($description) }}', '{{ addslashes($prix) }}')"
        data-modal-toggle="crud-modal" data-modal-show="crud-modal">

            <img src="{{ $image }}" alt="{{ $title }}" class="object-cover w-24 shadow-lg h-26">

            <div class="flex relative justify-between my-6 w-full">
                <div class="justify-start ml-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                    <p class="text-gray-600">{{ $prix }}</p>
                    <p class="text-gray-600">{{ $description }}</p>
                </div>
                <div class="flex justify-end items-center mx-2">
                    <span class="block px-5 py-2.5 text-sm font-medium text-center text-white bg-orange-400 rounded-lg hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-400 dark:focus:ring-orange-500">
                        +
                    </span>
                </div>
            </div>

        </a>
    </div>
    {{ $slot }}
</div>

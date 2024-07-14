@props([
    'image' => '',
    'title' => '',
    'description' => '',
    'infos' => [],
    'prix' => 0,
    'auteur' => '',
    'id' => ''
])

<div class="overflow-hidden bg-white rounded-lg shadow-md">
    <div class="relative items-center grid-row">
        <div class="flex">
            <div class="flex menu_images">
                <img src="{{ $image }}" alt="{{ $title }}" class="object-cover w-24 shadow-lg h-26">
            </div>
            <div class="flex relative justify-between my-6 w-full menu_content">
                <div class="justify-start ml-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
                    <p class="text-gray-600">{{ $prix }}</p>
                    <p class="text-gray-600">{{ $description }}</p>
                </div>
                <div class="flex justify-end items-center mx-2 menu_botton">
                    <span class="block px-5 py-2.5 text-sm font-medium text-center text-white bg-orange-400 rounded-lg hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-400 dark:focus:ring-orange-500">
                        +
                    </span>
                </div>
            </div>
        </div>
    </div>
    {{ $slot }}
</div>

<form method="post" action="" class="w-full">
    @csrf
    <div class="flex justify-between w-full">
        <div class="justify-start">
            {{ __($totalRestaurant) }}
            <h3 class="block text-2l bold">Restaurants</h3>
        </div>
        <div class="flex gap-2 justify-end">

            <div class="flex">

                <x-text-input type="hidden" value="1" name="search" />

                <x-text-input type="text" name="searchQuery" placeholder="Rechercher..." required
                     />
            </div>
            <div class="flex">
                <x-submit-button :label="'Rechercher'" :icon="'fa fa-user-o'"/>
            </div>

            <div class="flex">
                <x-map-search-component :icon="'fa fa-map-marker'" class="text-white bg-gray-500 text-16" :label="'Proche de moi'" />
            </div>

        </div>
    </div>
</form>

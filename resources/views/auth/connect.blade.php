<x-guest-layout>

    <x-slot name="left_side">
        <div class="w-1/2 tabs">

            {{-- header --}}
            <ul class="flex flex-wrap border-b border-gray-200">
                <li class="mr-2 -mb-px last:mr-0">
                    <a class="block px-6 py-4 border-b-2 border-transparent hover:border-gray-500" href="#tab1">Email</a>
                </li>
                <li class="mr-2 -mb-px last:mr-0">
                    <a class="block px-6 py-4 border-b-2 border-transparent hover:border-gray-500" href="#tab2">Téléphone</a>
                </li>
            </ul>
            {{-- end header --}}

            {{-- content --}}
            <div class="tab-content">
                <div id="tab1" class="p-6 border-t border-gray-200 tabs-items">
                    <div>
                        <x-login-forms />
                    </div>
                </div>
                <div id="tab2" class="hidden p-6 border-t border-gray-200 tabs-items">
                    <div>
                        <x-signin-form />
                    </div>
                </div>
            </div>
            {{-- end content --}}
        </div>
        <div class="absolute bottom-0">
            <div class="flex justify-around lg:col-span-3">
                <div class="flex col-span-1">
                    <a href="{{ route('login') }}" class="p-4 text-center text-white bg-gray-300 rounded">
                        <button type="button" class="btn">Compte 1</button>
                    </a>
                </div>
                <div class="flex col-span-1">
                    <a href="#" class="p-4 text-center text-white bg-gray-300 rounded">
                        <button type="button" class="btn">Compte 2</button>
                    </a>
                </div>
                <div class="flex col-span-1">
                    <a href="#" class="p-4 text-center text-white bg-gray-300 rounded">
                        <button type="button" class="btn">Compte 3</button>
                    </a>
                </div>
            </div>

        </div>
    </x-slot>
</x-guest-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.tabs a');
        const tabContents = document.querySelectorAll('.tab-content .tabs-items');

        tabs.forEach(tab => {
            tab.addEventListener('click', event => {
                event.preventDefault();

                // Supprimer la classe "border-gray-500" de tous les onglets
                tabs.forEach(tab => {
                    tab.classList.remove('border-gray-500');
                });

                // Ajouter la classe "border-gray-500" à l'onglet sélectionné
                tab.classList.add('border-gray-500');

                // Cacher tous les contenus d'onglet
                tabContents.forEach(tabContent => {
                    tabContent.classList.add('hidden');
                });

                // Afficher le contenu de l'onglet sélectionné
                const tabId = tab.getAttribute('href');
                document.querySelector(tabId).classList.remove('hidden');
            });
        });
    });
</script>

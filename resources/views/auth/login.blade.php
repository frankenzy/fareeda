<x-guest-layout>

    <div class="relative flex-col">
        <div class="flex relative grid-cols-2 justify-around items-center">
            <div class="flex relative w-full h-screen max-h-screen lg:col-span-2"
                style="background-image: url('images/login_banner.jpg')">
                <div class="absolute inset-0 bg-black opacity-40"></div>

            </div>
            <div class="flex justify-center w-full lg:col-span-2">

                <div class="w-1/2 tabs">

                    {{-- header --}}
                    <ul class="flex flex-wrap border-b border-gray-200">
                        <li class="mr-2 -mb-px last:mr-0">
                            <a class="block px-6 py-4 border-b-2 border-transparent hover:border-gray-500"
                                href="#tab1">Se connecter</a>
                        </li>
                        <li class="mr-2 -mb-px last:mr-0">
                            <a class="block px-6 py-4 border-b-2 border-transparent hover:border-gray-500"
                                href="#tab2">Creer un compte</a>
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

            </div>
        </div>
    </div>
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

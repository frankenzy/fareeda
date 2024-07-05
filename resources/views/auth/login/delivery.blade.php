<x-guest-layout>

    <x-slot name="left_side">
        <div class="items-center w-40 tabs">


            <div class="mb-4 form-header">
                <h3 class="text-2xl text-center">CONNEXION CLIENT</h3>
                <p class="mt-4 text-center">
                    Connectez-vous pour accéder à votre établissement
                </p>
            </div>
            <form method="POST" action={{ route('delivery-login-resolve') }}>
                @csrf
                <!-- Email Address -->

                <div class="mt-4">

                    <ul class="flex flex-wrap border-b border-gray-200">

                        <li class="mr-2 -mb-px last:mr-0">

                            <a class="block px-6 py-4 text-red-500 border-b-2 active hover:border-gray-500"
                                href="#tabsEmail"> <span class="mx-2"> <i class="text-gray-400 fa fa-envelope"
                                        aria-hidden="true"></i></span>Email</a>

                        </li>

                        <li class="mr-2 -mb-px last:mr-0">
                            <a class="block px-6 py-4 text-red-500 border-b-2 hover:border-gray-500"
                                href="#tabsTelephone">
                                <span class="mx-2"> <i class="fa fa-phone" aria-hidden="true"></i></span>éléphone</a>
                        </li>
                    </ul>
                    <div id="tabs-content">
                        <div class="mt-4 tab-content">
                            <div id="tabsEmail" class="tabs-items">

                                <x-input-label for="email" class="text-lg" >
                                    <i class="text-gray-400 fa fa-envelope"></i>
                                    {{__("Email")}}
                                    <span class="text-red-500">*</span>

                                </x-input-label>

                                <x-input-inside-icon class="w-full rounded-md">
                                    <x-slot name="icon">
                                        <i class="text-gray-400 fa fa-envelope"></i>
                                    </x-slot>

                                    <x-slot name="input">
                                        <input type="email" id="email" autocomplete="email" required autofocus
                                            value="{{ old('email') }}" name="email" placeholder="Email"
                                            class='px-4 py-2 w-full h-full border-0 focus:outline-none' />
                                    </x-slot>
                                </x-input-inside-icon>

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div id="tabsTelephone" class="hidden tabs-items">

                                <x-input-label for="telephone" class="text-lg" >
                                    <i class="text-gray-400 fa fa-phone"></i>
                                    {{__("N° de Telephone")}}
                                    <span class="text-red-500">*</span>

                                </x-input-label>

                                <!-- Utilisation du composant -->
                                <x-input-inside-icon class="w-full rounded-md">
                                    <x-slot name="icon">
                                        <span class='text-2xl text-gray-950'>+</span>
                                        <input type="tel" class="w-2/3 h-full text-2xl bg-transparent border-0 text-gray-950" value="225" required/>
                                    </x-slot>

                                    <x-slot name="input">
                                        <input type="tel" id="telephone" autocomplete="tel-national" required
                                            autofocus value="{{ old('telephone') }}" name="telephone"
                                            placeholder="N° de Telephone"
                                            class='px-4 py-2 w-full h-full bo rder-0 focus:outline-none' />
                                    </x-slot>
                                </x-input-inside-icon>


                                <x-input-error :messages="$errors->get('telephone')" class="mt-2" />


                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" class="text-lg">
                            <i class="fa fa-key"></i>
                            {{ __('Mot de passe') }}
                            <a href="{{route('password.update')}}" class="mx-5 text-xl text-orange-600">Oublié ?</a>
                        </x-input-label>


                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            placeholder=" Mot de passe" autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <!-- Password -->

                <!-- Remember Me -->
                <div class="block flex mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="text-indigo-600 rounded border-gray-300 shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex justify-start items-center mt-4">
                    <x-submit-button class="text-white bg-one">
                        {{ __('Se connecter') }}
                    </x-submit-button>
                </div>
            </form>
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

                // Réinitialiser tous les onglets et leurs contenus
                tabs.forEach(t => {
                    t.classList.remove('border-gray-500', 'active', 'text-red-500',
                        'border-t-2', 'border-l-2', 'border-r-2');
                });

                tabContents.forEach(tc => {
                    tc.classList.add('hidden');
                });

                // Appliquer les classes à l'onglet sélectionné
                // tab.classList.add('border-gray-500', 'border-t-2', 'border-l-2', 'border-r-2','active');
                tab.classList.add('active');


                if (tab.classList.contains('active')) {
                    tab.classList.remove('text-red-500', 'border-b-2');
                    tab.classList.add('border-gray-300', 'border-t-2', 'border-l-2',
                        'border-r-2');
                }
                // Afficher le contenu de l'onglet sélectionné
                const tabId = tab.getAttribute('href');
                document.querySelector(tabId).classList.remove('hidden');
            });

            // Ajouter une classe initiale à l'onglet actif par défaut (par exemple, le premier onglet)
            if (tab.classList.contains('active')) {
                // tab.classList.add('border-gray-500','border-t-1', 'border-l-1', 'border-r-1');
                tab.click(); // Simule un clic pour afficher le contenu au chargement de la page
            }
        });
    });
</script>

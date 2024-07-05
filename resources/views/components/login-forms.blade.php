@props(['url'])

<form method="POST" action={{$url}}>
    @csrf
    <!-- Email Address -->

    <div class="mt-4">
        <ul class="flex flex-wrap border-b border-gray-200">
            <li class="mr-2 -mb-px last:mr-0">
                <a class="block px-6 py-4 border-b-2 border-transparent hover:border-gray-500" href="#tabsEmail">Email</a>
            </li>
            <li class="mr-2 -mb-px last:mr-0">
                <a class="block px-6 py-4 border-b-2 border-transparent hover:border-gray-500" href="#tabsTelephone">Téléphone</a>
            </li>
        </ul>

        <div id="tabs-content">
            <div class="mt-4 tab-content">
                <div id="tabsEmail" class="tabs-items">

                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="xxxxxx@xxx.com" name="email" :value="old('email')" required
                            autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>
                <div id="tabsTelephone" class="hidden tabs-items">
                        <x-input-label for="telephone" :value="__('Telephone')" />
                        <x-text-input id="telephone" class="block mt-1 w-full" type="tel" placeholder="000-000-000" name="telephone" :value="old('telephone')"
                            required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    </div>

    <!-- Password -->

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox"
                class="text-indigo-600 rounded border-gray-300 shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                name="remember">
            <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
    </div>
    <div class="flex justify-end items-center mt-4">
        {{-- @if (Route::has('password.request'))
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif --}}
        <x-primary-button class="ms-3">
            {{ __('Log in') }}
        </x-primary-button>
    </div>
</form>
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

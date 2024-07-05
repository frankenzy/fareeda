<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto w-8xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('welcome') }}">
                        <x-application-logo class="block w-auto h-9 text-gray-800 fill-current dark:text-gray-200" />
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Users') }}
                    </x-nav-link>
                </div>
            </div>
            @if (!Route::is('menu.index'))
                <div class="pt-3 pb-3 space-y-1">
                    <x-connect-button class="text-white bg-one">
                        {{-- TODO: Ajouter un fas icon de connection --}}
                        {{ __('Se connect') }}
                    </x-connect-button>
                </div>
            @endif
            @if (Route::is('menu.index'))
                <div class="flex">
                    <div class="pt-3 mx-4 space-y-3">

                        <button type="button" data-modal-target="notification-modal"
                            data-modal-toggle="notification-modal" data-modal-show="notification-modal"
                            class="inline-flex relative items-center p-3 text-sm font-medium text-center text-red-600 bg-gray-300 rounded-lg hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-gray-600 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            <i class="fa fa-bell-o"></i>
                            <span class="sr-only">Notifications</span>
                        </button>

                    </div>

                    <div class="pt-3 mx-4 space-y-3">
                        <button type="button" id="dropdown-toggle-panier" data-dropdown-toggle="dropdown-panier"
                            aria-hidden="true" data-dropdown-placement="bottom"
                            class="inline-flex relative items-center p-3 text-sm font-medium text-center text-white bg-gray-300 rounded-lg hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="sr-only">Panier</span>
                            <div
                                class="inline-flex absolute -top-2 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white -end-2 dark:border-gray-900">
                                <span x-text="panier"></span>
                            </div>
                        </button>

                    </div>
                </div>
            @endif
        </div>
    </div>
    <x-notification-component />

    <div id="dropdown-panier"
        class="hidden z-20 w-full max-w-sm bg-white rounded-lg divide-y divide-gray-100 shadow dark:bg-gray-800 dark:divide-gray-700"
        aria-labelledby="dropdown-toggle-panier">
        <div
            class="block px-4 py-2 font-medium text-center text-gray-700 bg-gray-50 rounded-t-lg dark:bg-gray-800 dark:text-white">
            Panier
        </div>
        <div
            class="overflow-y-auto py-2 h-96 text-gray-700 divide-y divide-gray-100 dark:divide-gray-700 dark:text-gray-200">
            <template x-for="index in panier" :key="index">
                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <div class="flex-shrink-0">
                        <img class="w-11 h-11 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                            alt="Image utilisateur">
                    </div>
                    <div class="w-full ps-3">
                        <div class="mb-1.5 text-sm text-gray-500 dark:text-gray-400">
                            New message from <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>:
                            "Hey, what's up? All set for the presentation?"
                        </div>
                        <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                    </div>
                </a>
            </template>

        </div>
        <a href="#"
            class="block py-2 text-sm font-medium text-center bg-orange-500 rounded-b-lg text-white-900 hover:bg-orange-500 dark:bg-orange-800 dark:hover:bg-orange-700 dark:text-white">
            <div class="inline-flex items-center">
                <h3 class="text-xl text-white"> Valider mes connandes</h3>
            </div>
        </a>
    </div>
</nav>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block w-auto h-9 text-gray-800 fill-current dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Users') }}
                    </x-nav-link>
                </div>
            </div>
            <div class="pt-3 pb-3 space-y-1">
                <x-connect-button class="text-white bg-one">
                    {{-- TODO: Ajouter un fas icon de connection --}}
                    {{ __('Se connect') }}
                </x-connect-button>
            </div>
        </div>
    </div>
</nav>

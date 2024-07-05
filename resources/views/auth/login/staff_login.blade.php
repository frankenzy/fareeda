<x-guest-layout>

    <x-slot name="left_side" class="items-center w-70">
        <div class="items-center w-40">
            <div class="mb-4 form-header">
                <h3 class="text-2xl text-center">SE CONNECTER</h3>
                <p class="mt-4 text-center">
                    Connectez-vous pour accéder à votre établissement
                </p>
            </div>
            <form method="POST" action={{ route('staff-login-resolve') }}>
                @csrf
                <!-- Email Address -->
                <div class="mt-4">

                    <div id="tabs-content">
                        <div class="mt-4 tab-content">
                            <div id="tabsEmail" class="tabs-items">

                                <x-input-label for="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    {{__('Email') }}

                                </x-input-label>

                                <x-text-input id="email" class="block mt-1 w-full" type="email"
                                    placeholder="Email" name="email" :value="old('email')" required autofocus
                                    autocomplete="username" />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password">
                          <i class="fa fa-key"></i>
                            {{ __('Mot de passe') }}

                        </x-input-label>

                        <x-text-input id="password" class="block mt-1 w-full text" type="password" name="password"
                            required autocomplete="current-password" placeholder="Mot de passe"/>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <div class="flex justify-start items-center mt-4">
                    <x-submit-button class="text-lg text-white bg-one">
                        {{ __('Se connecter') }}
                    </x-submit-button>
                </div>
            </form>
        </div>
    </x-slot>
</x-guest-layout>

<x-guest-layout>

    <x-slot name="left_side">
        <div class="items-center w-2/4">
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

                                <x-input-label for="email" class="text-lg" >
                                    <i class="fa fa-user-secret"></i>
                                    {{__("Nom d'utilisateur/Email")}}

                                </x-input-label>

                                <x-text-input id="email" class="block mt-1 w-full" type="email"
                                    name="email" :value="old('email')" required autofocus
                                    autocomplete="username" placeholder="Nom d'utilisateur/Email" />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" class="text-lg">
                            <i class="fa fa-key"></i>
                            {{ __('Mot de passe') }}
                            <a href="{{route('password.update')}}" class="mx-5 text-xl text-orange-600">Oublié ?</a>
                        </x-input-label>

                        <x-text-input id="password" class="block mt-1 w-full" type="password" placeholder="Mot de passe" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                </div>

                <div class="flex justify-start items-center mt-4">
                    <x-submit-button class="text-white bg-one">
                        {{ __('Se connecter') }}
                    </x-submit-button>
                </div>
                <div class="mt-8">
                    <p>Je n'ai pas de compte ? <a href="{{route('custom.create')}}" class="mx-2 text-xl text-orange-600">S'inscrire</a></p>
                </div>
            </form>
        </div>
    </x-slot>
</x-guest-layout>

<x-guest-layout>
    <x-slot name="left_side">
        <form method="POST" action="{{ route('custom.store') }}">
            @csrf
            <!-- Name -->
            <div class="mb-2">
                <x-input-label for="username">
                    <i class="fa fa-user-secret"></i>
                    {{__('Restaurant username')}}
                </x-input-label>

                <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                    required autofocus placeholder="Restaurant username" />

                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="name">
                <i class="fa fa-user-circle"></i>
                {{__('Nom du propriétaire')}}
                </x-input-label>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus placeholder="Nom du propriétaire" />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email">
                    <i class="fa fa-envelope"></i>
                    {{ __('Email')}}
                </x-input-label>


                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email"
                    required autocomplete="username" />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
            <div class="mt-4">
                <x-input-label for="telephone">
                    <i class="fa fa-phone"></i>
                    {{ __('N° de Téléphone')}}
                </x-input-label>

                <x-input-inside-icon class="w-full rounded-md">
                    <x-slot name="icon">
                        <span class='text-2xl text-gray-950'>+</span>
                        <input type="tel" class="w-2/3 h-full text-2xl bg-transparent border-0 text-gray-950"
                            value="225" required />
                    </x-slot>

                    <x-slot name="input">
                        <input type="tel" id="telephone" autocomplete="tel-national" required autofocus
                            value="{{ old('telephone') }}" name="telephone" placeholder="N° de Telephone"
                            class='px-4 py-2 w-full h-full bo rder-0 focus:outline-none' />
                    </x-slot>
                </x-input-inside-icon>

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>

            <div class="flex grid-cols-3 gap-4 items-center w-full">
                <!-- Password -->
                <div class="mt-4 w-1/2">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4 w-1/2">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>


            <div class="my-4">

                <x-input-label for="cgi">
                    <input type="checkbox" name="cgi" value="cgi" required="" class="mr-4"/>
                    {{__("J'ai lu les")}}
                    <a href="{{url('cgi')}}" class="text-red-500">Terms et conditions</a>
                    {{__(" je les acceptes")}}
            </x-input-label>
            </div>
            <div class="flex justify-start items-center mt-4">
                <x-submit-button class="text-white bg-one" :label="'Inscrire'" />
            </div>

            <div class="flex justify-start items-center mt-4">
                <p class="mr-4 text-sm">
                    Déjà membre?
                </p>
                <a class="text-sm text-red-500 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __(' Se connecter?') }}
                </a>
            </div>
        </form>
    </x-slot>
</x-guest-layout>

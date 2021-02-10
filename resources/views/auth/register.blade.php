<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="idusu" :value="__('id')" />

                <x-input id="idusu" class="block mt-1 w-full" type="text" name="idusu" :value="old('idusu')" required autofocus />
            </div>

            <div>
                <x-label for="nombreusu" :value="__('Nombre')" />

                <x-input id="nombreusu" class="block mt-1 w-full" type="text" name="nombreusu" :value="old('nombreusu')" required autofocus />
            </div>

            <div>
                <x-label for="apellidousu" :value="__('Apellido')" />

                <x-input id="apellidousu" class="block mt-1 w-full" type="text" name="apellidousu" :value="old('apellidousu')" required autofocus />
            </div>
            <div>
                <x-label for="telefonousu" :value="__('Telefono')" />

                <x-input id="telefonousu" class="block mt-1 w-full" type="number" name="telefonousu" :value="old('telefonousu')" required autofocus />
            </div>
            <div>
                <x-label for="direccionusu" :value="__('Direccion')" />

                <x-input id="direccionusu" class="block mt-1 w-full" type="text" name="direccionusu" :value="old('direccionusu')" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<a href="/">
            <img src="https://boston-pizzas.com/img/sites/boston-pizzas.com-banner.jpg?w=2000&h=200&fit=crop&1568633703">
            </a>


<x-guest-layout>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="https://scontent.fclo7-1.fna.fbcdn.net/v/t1.0-9/95805761_118416429854260_5748332324286627840_o.jpg?_nc_cat=103&ccb=2&_nc_sid=09cbfe&_nc_ohc=AO5GOSZIcJsAX9eLf9z&_nc_ht=scontent.fclo7-1.fna&oh=05c754a05c32f396f1de8aa8d304e4f5&oe=60286A65" width="200" height="200">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
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

     

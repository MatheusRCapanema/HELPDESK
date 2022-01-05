<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
<<<<<<< HEAD
                <img src="https://www.linkpicture.com/q/618ab4e5c384b18c23e00dc3_brb-logo-0-p-130x130q80-2.png" alt="">
=======
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
>>>>>>> 778e44eb5e7119ce4d103a764706ff3bc253660b
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="password" :value="__('Senha')" />
=======
                <x-label for="password" :value="__('Password')" />
>>>>>>> 778e44eb5e7119ce4d103a764706ff3bc253660b

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="password_confirmation" :value="__('Confirmar Senha')" />
=======
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
>>>>>>> 778e44eb5e7119ce4d103a764706ff3bc253660b

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
<<<<<<< HEAD
                    {{ __('Resetar senha') }}
=======
                    {{ __('Reset Password') }}
>>>>>>> 778e44eb5e7119ce4d103a764706ff3bc253660b
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">

                <img src="https://www.linkpicture.com/q/618ab4e5c384b18c23e00dc3_brb-logo-0-p-130x130q80-2.png" alt="">


            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">

            {{ __('Esqueceu sua senha? Sem problemas. Apenas informe seu email, que mandaremos um link para redefinir ela.') }}



        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>

                    {{ __('Link de redefinição') }}

                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

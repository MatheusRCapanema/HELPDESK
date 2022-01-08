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

        <div class="mb-4 text-sm text-gray-600">
<<<<<<< HEAD
            {{ __('Obrigado por se registrar, porfavor enviamos um link para seu emial para você confirmar sua criação de conta.') }}
=======
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
>>>>>>> 778e44eb5e7119ce4d103a764706ff3bc253660b
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
<<<<<<< HEAD
                {{ __('Um novo link foi enviado para seu email.') }}
=======
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
>>>>>>> 778e44eb5e7119ce4d103a764706ff3bc253660b
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
<<<<<<< HEAD
                        {{ __('Reenviar o link de verificação') }}
=======
                        {{ __('Resend Verification Email') }}
>>>>>>> 778e44eb5e7119ce4d103a764706ff3bc253660b
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
<<<<<<< HEAD
                    {{ __('Deslogar') }}
=======
                    {{ __('Log Out') }}
>>>>>>> 778e44eb5e7119ce4d103a764706ff3bc253660b
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>

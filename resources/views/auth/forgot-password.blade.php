<x-guest-layout class="relative min-h-screen w-full">
    <div class="fixed inset-0 bg-cover bg-center bg-opacity-50" style="background-image: url('{{ asset('images/koi-bg.jpg') }}');"></div>

    <div class="relative flex flex-col items-center justify-center min-h-screen px-6">
        <div class="mb-8">
            <img src="{{ asset('images/koi-logowhite.png') }}" alt="Koi Logo" class="w-40 h-auto"> 
        </div>
    <div class="mb-4 text-sm text-white">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

           
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-8">
                @csrf

                <!-- email -->
                <div class="mb-6">
                    <x-input-label for="email" :value="__('Email')"  class="text-white"/>
                    <x-text-input id="email" class="block mt-1 w-full max-w-xl px-10 py-5 text-lg text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex flex-col items-center justify-center mt-12 mb-4 space-y-4">
                    <x-primary-button class="px-10 py-4 text-l hover:bg-orange-700">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                    
                    <!-- back -->
                    <a href="{{ route('login') }}" class="text-sm text-white underline hover:text-gray-400">
                        {{ __('Go back to login page') }}
                    </a>
            
            </form>
        </div>
    </div>
</x-guest-layout>

<x-guest-layout class="relative min-h-screen w-full">
    <div class="fixed inset-0 bg-cover bg-center bg-opacity-50" style="background-image: url('{{ asset('images/koi-bg.jpg') }}');"></div>

    <div class="relative flex flex-col items-center justify-center min-h-screen px-6">
        <div class="mb-8">
            <img src="{{ asset('images/koi-logowhite.png') }}" alt="Koi Logo" class="w-40 h-auto"> 
        </div>

    
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('register') }}" class="space-y-8">
                @csrf

                <!-- name -->
                <div class="mb-6">
                    <x-input-label for="name" :value="__('Name')" class="text-white" />
                    <x-text-input id="name" class="block mt-1 w-full max-w-xl px-10 py-5 text-lg text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- email address -->
                <div class="mb-6">
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email" class="block mt-1 w-full max-w-xl px-10 py-5 text-lg text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- password -->
                <div class="mb-6">
                    <x-input-label for="password" :value="__('Password')" class="text-white" />
                    <x-text-input id="password" class="block mt-1 w-full max-w-xl px-10 py-5 text-lg text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- confirm  -->
                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full max-w-xl px-10 py-5 text-lg text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex flex-col items-center justify-center mt-12 mb-4 space-y-4">
                    <x-primary-button class="px-10 py-4 text-l hover:bg-orange-700">
                        {{ __('Register') }}
                    </x-primary-button>
                    
                    <a href="{{ route('login') }}" class="text-sm text-white underline hover:text-gray-400">
                        {{ __('Already registered?') }}
                    </a>
                
            </form>
        </div>
    </div>
</x-guest-layout>

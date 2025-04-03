<x-guest-layout class="relative min-h-screen w-full">


    <div class="fixed inset-0 bg-cover bg-center bg-opacity-50" style="background-image: url('{{ asset('images/koi-bg.jpg') }}');"></div>

    <div class="relative flex flex-col items-center justify-center min-h-screen px-6">
        
        <div class="mb-8">
            <img src="{{ asset('images/koi-logowhite.png') }}" alt="Koi Logo" class="w-40 h-auto"> <!-- Increased logo size -->
        </div>

  
 
           
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-8">
                @csrf

                <!-- email add -->
                <div class="mb-6 text-white">
            
                    <x-input-label for="email" :value="__('Email')" class="text-white" />
                    <x-text-input id="email" class="block mt-1 w-full max-w-xl px-10 py-5 text-sm text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- password -->
                <div class="mb-6 text-white">
                    <x-input-label for="password" :value="__('Password')" class="text-white" />
                    <x-text-input id="password" class="block mt-1 w-full max-w-xl px-10 py-5 text-sm text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- remember me -->
                <div class="block">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-white mb-3">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- buttons -->
                <div class="flex flex-col items-center mt-12 mb-4 space-y-4">
                    <x-primary-button class="px-10 py-4 text-l hover:bg-orange-700 mb-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                    
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white mb-3 hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>


            </form>
        </div>
    </div>
</x-guest-layout>

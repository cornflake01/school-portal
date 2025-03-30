<x-guest-layout class="relative min-h-screen w-full">
    <!-- Background Image (Always Behind) -->
    <div class="fixed inset-0 bg-cover bg-center bg-opacity-50" style="background-image: url('{{ asset('images/koi-bg.jpg') }}');"></div>

    <!-- Floating Container with Logo Above -->
    <div class="relative flex flex-col items-center justify-center min-h-screen px-6">
        
        <!-- Logo Positioned Above the Box -->
        <div class="mb-8">
            <img src="{{ asset('images/koi-logowhite.png') }}" alt="Koi Logo" class="w-40 h-auto"> <!-- Increased logo size -->
        </div>

        <!-- Floating Login Box with increased size and spacing -->
        <div class="bg-white/90 p-20 rounded-2xl shadow-2xl w-11/12 max-w-4xl mx-auto">
 
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-8">
                @csrf

                <!-- Email Address -->
                <div class="mb-6 text-white">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full px-6 py-3 text-lg text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-6 text-white">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full px-6 py-3 text-lg text-black border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" 
                        type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Buttons & Links -->
                <div class="flex flex-col items-center mt-12 space-y-4">
                    <x-primary-button class="px-10 py-4 text-l bg-orange-700">
                        {{ __('Log in') }}
                    </x-primary-button>
                    
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

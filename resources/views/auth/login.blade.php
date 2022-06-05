<x-guest-layout>
    <div>
        @if (Route::has('login'))
        <div class="bg-gray-100">
            <div class="bg-gray shadow">
            <div class="container mx-auto px-4">
              <div class="flex items-center justify-between py-4">
                <div>
                </div>
                <div class="hidden sm:flex sm:items-center">
                        @auth
                            <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Usuario</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
                            @endif
                        @endauth
                    </div>
                @endif
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
    </div>

        <div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
            <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold text-center">Login</h1>
                        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                    <div class="relative">
                        <input autocomplete="on" id="email" name="email" type="text" :value="old('email')" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" required autofocus />
                        <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
                    </div>

            <!-- Password -->
            <div class="relative">
                <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                <label for="password" :value="__('Password')" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <div class="relative">
                    <button class="bg-blue-500 text-white rounded-md px-2 py-1">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</x-guest-layout>

<div>
    @if (Route::has('login'))
    <div class="bg-gray-300 font-sans w-full min-h-screen m-0">
        <div class="bg-gray shadow">
        <div class="container mx-auto px-4">
          <div class="flex items-center justify-between py-4">
            <div>
            </div>
            <div class="hidden sm:flex sm:items-center"><br>
                    @auth

                    @else
                        <a href="{{ route('login') }}" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Sign up</a>
                        @endif
                    @endauth
                </div>
            @endif
                </div>

                  @extends('welcome')

                    @section('content')


                    <div class="container">


                    @livewire('post-component')
                    </div>
                </div>
              </div>
            </div>
</div>



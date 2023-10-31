
<x-guest-layout class="bg-white">
   
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  ">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-4 content-center w-full rounded-lg bg-stripes-sky  md:h-screen mt-8 md:mt-0">
            <div>
                <div class="">
                    <img class="	text-red-150 h-auto" src="{{ asset('img/logo_red.svg') }}" alt="">
                    <h3 class="text-4xl font-semibold">Login</h3>
                    <span>Login aja deh brok, nanti kalo udah login tau sendiri</span>
                    @if (Session::has('errorGoogle'))
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <span class="font-medium">Login Failed!!</span> {{ Session::get('errorGoogle') }}
                        </div>
                    @else
                    <div class="mt-12 md:mt-20"></div>
                    @endif
                </div>

                <div class="">
                    
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <div class="hidden md:block">
                        <a href="{{ route('google-auth') }}" type="button" class=" text-center block mt-1 w-full py-2.5 mr-2 mb-2  text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-red-500 focus:z-10 focus:ring-4 focus:ring-gray-200 font-bold px-2  "><i class="fa-brands fa-google  pr-2 "></i> Log  in with GoOoOogle</span></a>
                        <hr class="my-8">
                    </div>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="">
                            <x-jet-input label="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            @error('email') <span class="text-rose-600  text-sm">{{ $message }}</span> @enderror
                        </div>
                        
                        <div class="mt-8">
                            <x-jet-input label="Password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            @error('password') <span class="text-rose-600  text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="justify-between flex mb-2 mt-5">
                            <div>
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-red-150 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            </div>
                        </div>
                        <div class=" ">
                            <button class="text-center items-center px-4 py-2 bg-red-150 border border-transparent rounded-full font-semibold text-lg text-white w-full tracking-widest hover:bg-red-500 active:bg-red-500 focus:outline-none focus:bg-red-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">{{ __('Log in') }}</button>
                            <div class="text-end">
                                <span ><span class="text-sm"> don't have account yet?</span>
                                    <a class="underline text-sm text-red-150 hover:text-gray-900" href="{{ route('register') }}">
                                        {{ __('Register Here') }}
                                    </a>
                                </span>
                            </div>
                        </div>
                    </form>
                    <div class="block md:hidden">
                        <hr class="my-5">
                        <a href="{{ route('google-auth') }}" type="button" class=" text-center block mt-1 w-full py-2.5 mr-2 mb-2  text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-red-500 focus:z-10 focus:ring-4 focus:ring-gray-200 font-bold px-2  "><i class="fa-brands fa-google  pr-2 "></i> Log in with GoOoOogle</span></a>
                    </div>
                </div>
            </div>
            <div class="hidden md:grid justify-items-stretch content-end">
                <img class="justify-self-end" src="{{ asset('img/vector_95.svg') }}" alt="">
            </div>
            
        </div>
    </div>
        
</x-guest-layout>

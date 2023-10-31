<div class="mt-5 md:mt-20">
    @if ($currentStep == 1)
    <div class="hidden md:block">
        <a href="{{ route('google-auth') }}" type="button" class=" text-center block mt-1 w-full py-2.5 mr-2 mb-2  text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-red-500 focus:z-10 focus:ring-4 focus:ring-gray-200 font-bold px-2  "><i class="fa-brands fa-google  pr-2 "></i> Log  in with GoOoOogle</span></a>
        <hr class="my-8">
    </div>
        <div>
            <x-jet-input label="Name"  wire:model="name" class="block mt-1 w-full " type="text"  name="name" :value="old('name')" required autofocus autocomplete="name" />
            @error('name') <span class="text-rose-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4">
            <x-jet-input label="Email"  wire:model="email" class="block mt-8 w-full " type="email" name="email" :value="old('email')" required autocomplete="Email"  />
            @error('email') <span class="text-rose-600  text-sm">{{ $message }}</span> @enderror
        </div>
        <div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
        </div>

        <div class="">
            <button wire:click="firstStepSubmit" class="mt-3 text-center items-center px-4 py-2 bg-red-150 border border-transparent rounded-full font-semibold text-lg text-white w-full tracking-widest hover:bg-red-500 active:bg-red-500 focus:outline-none focus:bg-red-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">{{ __('Continue') }}<i class="fas fa-chevron-right ml-1 mr-0"></i><i class="fas fa-chevron-right"></i></button>
            <div class="text-end">
                <span><span class="text-sm">Already have an account?</span> 
                    <a class="underline text-sm text-red-150 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Login Here') }}
                    </a>
                </span>
            </div>
        </div>
        <div class="block md:hidden">
            <hr class="my-5">
            <a href="{{ route('google-auth') }}" type="button" class=" text-center block mt-1 w-full py-2.5 mr-2 mb-2  text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-red-500 focus:z-10 focus:ring-4 focus:ring-gray-200 font-bold px-2  "><i class="fa-brands fa-google  pr-2 "></i> Log in with GoOoOogle</span></a>
        </div>
    @elseif($currentStep == 2)
        <x-jet-validation-errors class="mb-2" />

        <button wire:click="backBtn" class="mt-3 mb-3 items-center px-4 py-2 bg-red-150 border border-transparent rounded-full font-semibold text-lg text-white tracking-widest hover:bg-red-500 active:bg-red-500 focus:outline-none focus:bg-red-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"><i class="fas fa-long-arrow-left"></i>{{ __('Back') }}</button>
        <div>
            <x-jet-input label="Password"  wire:model="password" class="block mt-1 w-full" type="password"   required autofocus  />
        </div>

        <div class="mt-4">
            <x-jet-input label="Confrim Password"  wire:model="password_confrim" class="block mt-8 w-full " type="password"  required />
        </div>
            
                
        <div class="">
            <button wire:click="createUser" class="mt-5 text-center items-center px-4 py-2 bg-red-150 border border-transparent rounded-full font-semibold text-lg text-white w-full tracking-widest hover:bg-red-500 active:bg-red-500 focus:outline-none focus:bg-red-500 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">{{ __('Register') }}</button>
            
        </div>
    @endif
   

</div>
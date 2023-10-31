
<x-guest-layout class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 grid-cols-1 gap-4 content-center w-full rounded-lg bg-stripes-sky   mt-8 md:mt-0" >
            <div>
                <div class="mb-16 md:mb-0 mt-10 md:mt-40">
                    <img class="w-20	text-red-150 h-auto" src="{{ asset('img/logo_red.svg') }}" alt="">
                    <h3 class="text-4xl font-semibold">Register</h3>
                    <span>register ya brok, nanti kalo udah register tau sendiri</span>
                </div>
                @livewire('wizard-registration')
            </div>
            <div class="hidden md:grid justify-items-stretch">
                <img class="justify-self-end pt-60" src="{{ asset('img/vector_95.svg') }}" alt="">
            </div>
        </div>
    </div>
    
</x-guest-layout>

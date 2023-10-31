<footer class="bg-dark rounded-t-2xl mt-10">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
                <a href="{{ route('home') }}">
                    <x-jet-application-mark-dark class="block h-10 w-auto" />
                </a>
            </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
                <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Get in touch</h2>
                <ul class="text-gray-400 font-medium">
                    <li class="mb-1">
                        <a href="https://linkedin.com/in/Arsyadam" class="hover:underline">Linked In</a>
                    </li>
                    <li class="mb-1">
                        <a href="https://instagram.com/Arsyadam" class="hover:underline">Instagram</a>
                    </li>
                    <li class="mb-1">
                        <a href="https://youtube.com/" class="hover:underline">Youtube</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold uppercase text-white">Contact Me</h2>
                <ul class="text-gray-400 font-medium">
                    <li class="mb-4">
                        <a href="mailto:work@arsyadam.id" class="hover:underline">work@arsyadam.id</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6  sm:mx-auto border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm sm:text-center text-gray-400">© {{ date("Y") }} Arsyadam All Rights Reserved.
        </span>
    
    </div>
    </div>
</footer>


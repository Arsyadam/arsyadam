





<form wire:submit.prevent="submit" >
  
  <div class="@if ($success) flex @else hidden  @endif  items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
    <i class="fa-solid fa-circle-check pr-3"></i>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">Success </span> Please waitt, i will respond your messege ASAP.
    </div>
  </div>

    <div class="grid grid-col-2">
        <div class="pr-5">
            <div class="relative ">
                <input type="text" wire:model="name" id="name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-black appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
                <label for="name" class="absolute text-md text-black  duration-300 transform -translate-y-4 scale-75 top-1 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Name</label>
            </div>   
            @error('name') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="">
            <div class="relative ">
                <input type="email" wire:model="email" id="email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-black appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " />
                <label for="email" class="absolute text-md text-black  duration-300 transform -translate-y-4 scale-75 top-1 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Email</label>
            </div>  
            @error('email') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="block mt-5 col-span-2">
            <div class="relative ">
                <textarea rows="7" wire:model="messege" id="messeage" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-black appearance-none focus:outline-none focus:ring-0 focus:border-red-600 peer" ></textarea>
                <label for="messeage" class="absolute text-md text-black  duration-300 transform -translate-y-4 scale-75 top-1 z-10 origin-[0] bg-white  px-2 peer-focus:px-2 peer-focus:text-red-600 peer-focus peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Messege</label>
            </div>  
            @error('messege') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="block mt-3 col-span-2">
            <button wire:loading.class="p-5" wire:click="submit" type="button" class="w-full text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                <div wire:loading.delay.remove wire:target="submit"> Send The Messeges</div> 
                <div wire:target="submit" wire:loading.delay>
                    <div role="status">
                        <svg aria-hidden="true" class="inline w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </div> 
            </button>
        </div>
    </div>
</form>

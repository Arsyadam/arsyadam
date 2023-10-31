<x-app-layout >


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-3 mt-20">
        <div class="justify-between flex text-dark py-5">
            <h3 class="text-lg md:text-2xl font-medium flex items-stretch " >Blog Posts <span class="px-0 md:px-20 border-dark border-b-4 self-center ml-3"></span></h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <h1 class="text-7xl text-dark
             font-bold">Coming Soon...</h1>
            @foreach ($data as $x)
                {!! $x->content !!}
                <hr>
            @endforeach
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-32">
        <div class="justify-between flex text-dark py-5">
            <h3 class="text-lg md:text-2xl font-medium flex items-stretch " >Video <span class="px-0 md:px-20 border-dark border-b-4 self-center ml-3"></span></h3>
        </div>
           <div class="grid grid-cols-1 md:grid-cols-3  gap-3">
            <div class="relative">
                <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100  px-1  md:px-2  ">Font Awesome</label>
                <div class="border-dark border-2 p-3  rounded-xl h-48 w-full md:h-52  w-full justify-between flex items-stretch ">
                        <iframe class="w-full rounded-xl"  src="https://youtube.com/embed/xB5gsLzNM1Q?si=H2O_umhc3aAQgOjY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>   
            <div class="relative">
                <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100  px-1  md:px-2  ">Kompilasi PUBG</label>
                <div class="border-dark border-2 p-3  rounded-xl h-48 w-full md:h-52  w-full justify-between flex items-stretch ">
                        <iframe class="w-full rounded-xl"  src="https://www.youtube.com/embed/YrU4YuZZNDA?si=PruSnQf-bm2vFj4q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            
           
        </div>
    </div>
    
        
</x-app-layout>

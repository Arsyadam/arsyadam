<x-app-custom >
    <div class=" bg-gray-100">
        <section class="bg-white" id="header">
            <nav x-data="{ open: false }" class="bg-gray-100 border-b border-gray-100 rounded-b-[30px] shadow-lg ">
                @livewire('navigation-menu')
            </nav>
            <main>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  " >
                    <div class="grid grid-cols-1 md:grid-cols-2   ">
                        
                        <div class="justify-end flex mt-20 md:hidden" style="background-image:url({{asset('img/vector_95.svg')}}); background-size: 390px 390px; background-repeat:no-repeat; background-position: left;  ">
                            <img  src="{{asset('img/foto-dika.png')}}" alt="" >
                        </div>
                        <div class="lg:pt-32 pt-5">
                            <h1 class="md:text-8xl text-7xl text-dark  font-bold ">Arsyad Ali <br> Mahardika</h1>
                            <h2 class="text-4xl text-red-150 font-bold pb-4" id="typewriter"></h2>
                            {{-- <ul class="pt-5 text-xs md:text-base">
                                <li class="inline">💻 Web Development</li>
                                <i class="fas fa-circle text-xs md:px-4 px-1 text-gray-300"></i>
                                <li class="inline">📈 Data Science</li>
                                <i class="fas fa-circle text-xs md:px-4 px-1  text-gray-300"></i>
                                <li class="inline">✏️ Design</li>
                            </ul> --}}
                            <p class="md:w-4/5 w-full break-normal  text-sm">Arsyad Ali Mahardika, That's my full name, my friends usally call me Dikatok, Dikasaja, Dika, Arsyad, Adam, Ali you name it! did you notice? that <b>Arsyadam</b> is abbreviation for my full name, let me explain, <b>Arsyad A</b>li <b>M</b>ahardika yeah!! and finnaly now you know why my stage name is Arsyadam and i proud of it</p>
                        </div>
                        <div class="justify-end md:flex mt-20 hidden" style="background-image:url({{asset('img/vector_95.svg')}}); background-size: 390px 390px; background-repeat:no-repeat; background-position: right;  ">
                            <img  src="{{asset('img/foto-dika.png')}}" alt="" >
                    </div>
                    {{-- <div class="content-end justify-center flex mt-40"><i class="fa-solid fa-angles-down text-4xl"></i></div> --}}
                    
                </div>
            <!-- Page Content -->
            </main>
        </section>
        <div class="relative h-56">
            <div class="justify-center flex">
                <img class="absolute w-[120rem]  -top-1"  src="{{asset('img/vector-about-me-1.svg')}}" alt="">
                <div class="content-end justify-center md:flex  relative hidden">
                    <i class="fa-solid fa-angles-down text-4xl absolute top-36"></i>
                </div>
            </div>
        </div>
        <section>
                
            <div class=" relative  pb-14">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  " >
                    <div class="grid grid-cols-1 lg:grid-cols-2  ">
                        <div class="md:mt-10 mt-0">
                            <div class="text-4xl font-bold text-red-150 ">Education</div>
                            <div class="text-md font-medium">this is a part of my education for the past 4 years</div>
                        </div>
                        <div class="mt-10 w-full" >
                            <div class="block">
                                <div class="inline-block">
                                    <img src="{{asset('img/telkom-logo.png')}}" alt="">
                                </div>
                                <div class="inline-block align-top">
                                    <h3 class="font-medium md:text-xl text-sm italic">Studying at</h3>
                                    <h2 class="font-bold md:text-3xl text-lg">Telkom Malang High School</h2>
                                    <h3 ><span class="font-medium md:text-xl text-md italic">Software Enginering </span> <span class="md:text-sm text-xs md:inline hidden text-gray">(RPL) Rekayasa Perangkat Lunak</span></h3>
                                    <h3 class="font-base md:text-lg text-sm italic">2023-2026</h3>
                                </div>
                            </div>
                            <div class="flex md:gap-20 gap-5">
                                <div class=" ">
                                    <img src="{{asset('img/algoritma-logo.png')}}" alt="">
                                    <h2 class="font-bold md:text-xl text-lg   ">Algoritma <br> Data Science School</h2>
                                    <div class="font-medium md:text-md text-sm italic pt-3">
                                        <div class="border-l-4 border-dark pl-1">Data Analytics Specialization</div>
                                        <div class="border-l-4 border-dark pl-1 my-3">Data Visual Specialization</div>
                                        <div class="border-l-4 border-dark pl-1">Machine Learing Specialization</div>
                                    </div>

                                </div>
                                <div class="pt-3 ">
                                    <img class="pb-1" src="{{asset('img/karisma-logo.png')}}" alt="">
                                    <h2 class="font-bold md:text-xl text-lg  ">Karisma Academy</h2>
                                    <div class="font-medium md:text-md text-sm italic list-disc">
                                        <div class="border-l-4 border-dark pl-1">Fullstack Web Development</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skill" class="">
            <div class="  ">
                <div class="justify-start flex h-96" style="background-image:url({{asset('img/vector-about-me-4.svg')}}); background-repeat: no-repeat; background-position: center;
                 ">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 container text-white relative ">
                        <div class="absolute md:top-44 top-36">
                        <h1 class="text-red text-4xl font-bold">Skills</h1>
                        <h3 class="text-red text-md font-base">This is the tools i used to it</h3>
                    </div>
                    </div>
                </div>
            </div>   
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 container text-white  ">
                <div class="grid md:grid-cols-4 grid-cols-2 gap-4">
                   
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/php-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>PHP</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/python-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>Python</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/r-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>R</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/laravel-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>Laravel</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/tailwind-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>Tailwind</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/bootstrap-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>Bootstrap</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/html-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>HTML</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/css-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>CSS</div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 p-3 pl-4  bg-white rounded-lg">
                        <img class=" h-10 " src="{{asset('img/figma-logo.png')}}" alt="">
                        <div class="font-bold text-xl fs text-dark">
                            <div>Figma</div>
                        </div>
                    </div>
                    
                    
                </div>
        </section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 container my-32">
            <div class="grid grid-cols-1 md:grid-cols-2   ">
                        
                <div class="flex items-center">
                    <h1 class="md:text-8xl text-5xl text-dark  font-bold ">The <br>  <span class="bg-red-150 text-white"> Project </span></h1>
                </div>
                <div class="flex justify-end" style="">
                    <div class="m-4 max-w-xs mx-1 md:mx-3 bg-white border border-gray-200 rounded-xl md:rounded-3xl shadow ">
                        <div class="relative">
                            <a href="https://rpubs.com" class="bg-blue-800 flex items-stretch absolute w-full  rounded-full text-sm  md:text-xl font-bold italic md:py-3 py-1 text-white px-3"><i class="fab fa-github self-center text-xl px-1 md:px-3"></i>  Rpbus</a>
                            <a >
                                <img class="rounded-xl md:rounded-2xl pt-5 " src="https://i.ibb.co/tpW0j1D/image.png" alt="" />
                            </a>
                        </div>
                        <a  href="{{ route('project')}}">
                        <div class="p-2 md:p-5">
                                <h5 class="text-xs md:text-lg font-medium italic tracking-tight text-gray-400 dark:text-white">AI</h5>
                                <h5 class="mb-2 text-xs md:text-xl break-all  font-bold tracking-tight text-gray-900 dark:text-white">CSGO Classification with Logistic Regression</h5>
                            </div>
                        </a>
                    </div>
                    <div class="bg-white rounded-3xl  shadow  justify-items-center flex items-stretch ml-5 pl-5 md:pr-4 pr-8">
                        <div class="self-center">
                            <a class="" href="/project">
                                <i class="fa-solid fa-circle-chevron-right text-5xl"></i>
                                <h5 class="text-red-150 text-lg font-medium">See more</h5>
                            </a>
                        </div>
                    </div>
                </div>
                
                
            </div>  
        </div>
        <hr>
        <section class="bg-white py-3">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 container my-12">
                <div class="grid grid-cols-1 md:grid-cols-2   ">
                            
                    <div class="flex items-center">
                        <h1 class="md:text-7xl text-5xl text-dark  font-bold bg-red  ">Let's Work <br> Togather</h1>
                    </div>
                    <div class="justify-end md:flex  flex item-center " style="">
                        @livewire('send-email')  
                    </div>
                    
                    
                </div>  
            </div>
        </section>
          
        
        
   

        @include('footer')        

    </div>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>

    <script>
        
        var app = document.getElementById('typewriter');

        var typewriter = new Typewriter(app, {
            loop: true
        });

        typewriter.typeString(' Web Development')
            .pauseFor(1000)
            .deleteAll()
            .typeString(' Data Science')
            .pauseFor(1000)
            .deleteAll()
            .typeString('Design')
            .pauseFor(4000)
            .start();

          
    </script>
        
</x-app-custom>

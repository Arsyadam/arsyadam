<x-app-layout >
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 " >
        <section id="header">
                <div class="grid content-end w-full rounded-lg bg-stripes-sky  md:h-64  mt-20 md:mt-5">
                    <div class="mr-5">
                        <h1 class="md:text-6xl text-4xl text-red-150"><span class="font-medium md:text-6xl text-xl"> Hi, i'm </span><span class="italic font-bold md:inline-block block">Arsyadam</span> </h1>
                        <h2 class="md:text-4xl text-xl md:w-6/3 mb-5 text-black font-medium">Interested all about <br class="md:hidden block"> Technology and Inovation</h2>
                         <a class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-xl px-5 py-2.5 text-center mr-2 mb-2" href="{{ route('about-me')}}">About Me <i class="fas fa-external-link-alt pl-2"></i></a>
                    </div>
                </div>
            <div class="content-end justify-center flex mt-40"><i class="fa-solid fa-angles-down text-4xl"></i></div>
        </section>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  " >
        <section class="my-10">
            <div class="justify-between flex ">
                <h3 class="text-lg md:text-2xl font-medium flex items-stretch " >The Projects <span class="px-0 md:px-20 border-black border-b-4 self-center ml-3"></span></h3>
                <a href="{{ route('project')}}" class="underline text-lg md:text-2xl font-medium">See all My Project <i class="fas fa-long-arrow-alt-right text-lg md:text-2xl pl-2"></i></a>
            </div>

            <div class="mt-10 grid md:grid-cols-4 grid-cols-3">
                <div class="m-4 max-w-xs mx-1 md:mx-3 bg-white border border-gray-200 rounded-xl md:rounded-3xl shadow ">
                    <div class="relative">
                        <a href="https://rpubs.com" class="bg-blue-800 flex items-stretch absolute w-full  rounded-full text-sm  md:text-xl font-bold italic md:py-3 py-1 text-white px-3"><img class="w-8 mr-3 h-auto" src="{{ asset('img/rpubs_logo.png') }}" alt="">  Rpbus</a>
                        <a href="{{ route('project') }}">
                            <img class="rounded-xl md:rounded-2xl pt-5 " src="https://i.ibb.co/HgLcBdD/image.png" alt="" />
                        </a>
                    </div>
                    <a  href="{{ route('project') }}">
                        <div class="p-2 md:p-5">
                            <h5 class="text-xs md:text-lg font-medium italic tracking-tight text-gray-400 dark:text-white">AI</h5>
                            <h5 class="mb-2 text-xs md:text-xl break-all  font-bold tracking-tight text-gray-900 dark:text-white">Crime in Chicago Time Series & Forecasting</h5>
                        </div>
                    </a>
                </div>
                
                {{-- Clasification --}}
                <div class="m-4 max-w-xs mx-1 md:mx-3 bg-white border border-gray-200 rounded-xl md:rounded-3xl shadow ">
                    <div class="relative">
                        <a href="https://rpubs.com" class="bg-blue-800 flex items-stretch absolute w-full  rounded-full text-sm  md:text-xl font-bold italic md:py-3 py-1 text-white px-3"><img class="w-8 mr-3 h-auto" src="{{ asset('img/rpubs_logo.png') }}" alt="">  Rpbus</a>
                        <a  href="{{ route('project') }}">
                            <img class="rounded-xl md:rounded-2xl pt-5 " src="https://i.ibb.co/tpW0j1D/image.png" alt="" />
                        </a>
                    </div>
                    <a  href="{{ route('project') }}">
                    <div class="p-2 md:p-5">
                            <h5 class="text-xs md:text-lg font-medium italic tracking-tight text-gray-400 dark:text-white">AI</h5>
                            <h5 class="mb-2 text-xs md:text-xl break-all  font-bold tracking-tight text-gray-900 dark:text-white">CSGO Classification with Logistic Regression</h5>
                        </div>
                    </a>
                </div>
                {{--Web Porto--}}
                <div class="m-4 max-w-xs mx-1 md:mx-3 bg-white border border-gray-200 rounded-xl md:rounded-3xl shadow ">
                    <div class="relative">
                        <a href="#" class="bg-dark flex items-stretch absolute w-full  rounded-full text-sm  md:text-xl font-bold italic md:py-3 py-1 text-white px-3"><i class="fab fa-github self-center text-xl px-1 md:px-3"></i>  Github</a>
                        <a  href="{{ route('project') }}">
                            <img class="rounded-xl md:rounded-2xl pt-5 " src="https://th.bing.com/th/id/OIP.NbfPECA64xbFnmW58MbWDQHaEo?pid=ImgDet&rs=1" alt="" />
                        </a>
                    </div>
                    <a  href="{{ route('project') }}">
                    <div class="p-2 md:p-5">
                            <h5 class="text-xs md:text-lg font-medium italic tracking-tight text-gray-400 dark:text-white">Web App</h5>
                            <h5 class="mb-2 text-xs md:text-xl break-all  font-bold tracking-tight text-gray-900 dark:text-white">Arsyadam Portofolio Website</h5>
                        </div>
                    </a>
                </div>
                
                <div class="bg-white rounded-3xl  shadow  justify-items-center hidden md:flex items-stretch ml-5 pl-5 w-36">
                    <div class="self-center">
                        <a class="" href="#">
                            <i class="fa-solid fa-circle-chevron-right text-5xl"></i>
                            <h5 class="text-red-150 text-lg font-medium">See more</h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="bg-dark pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="justify-between flex text-white py-5">
                <h3 class="text-lg md:text-2xl font-medium flex items-stretch " >Blog Posts <span class="px-0 md:px-20 border-white border-b-4 self-center ml-3"></span></h3>
                {{-- <a href="#" class="underline text-lg md:text-2xl font-medium">See all My Blog Posts <i class="fas fa-long-arrow-alt-right text-lg md:text-2xl pl-2"></i></a> --}}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <h1 class="text-7xl text-white font-bold">Coming Soon...</h1>
                {{-- @for ($i = 0; $i < 3; $i++)
                    
                <div class="bg-white rounded-3xl grid grid-cols-3 card-inset ">
                    <img class="object-none block  h-36 md:h-52  w-full rounded-l-3xl " src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    <div class="pt-5 mb-1 px-3 col-span-2 ">
                        <h3 class="md:text-lg text-xs italic font-medium">January, 23 2023</h3>
                        <h1 class="text-sm md:text-sm lg:text-xl break-all  md:h-20 h-16 font-bold">Liburan Ber-5 ke Bali pas covid lagi ketat-ketatnya</h1>
                        <div class="mt-3 bg-red-150  text-white font-medium text-xs md:text-md lg:text-lg px-3 py-1 rounded-lg">
                            <a href="#"> 
                                Read More <i class="fa-solid fa-right-long hover:fa-fade"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endfor --}}

            </div>
        </div>

        
    </section>
    <section class="mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">

            <h3 class="text-lg md:text-2xl font-medium flex items-stretch mb-5" >Get in touch with me <span class="px-0 md:px-20 border-dark border-b-4 self-center ml-3"></span></h3>

            <div class="grid grid-cols-3 md:grid-cols-5 gap-4 mx-5">
                    
                <div class="relative">
                    <a href="https://github.com/Arsyadam">
                        <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100  px-2 left-1  md:left-2">Github</label>
                        <div class="border-dark border-2 rounded-xl h-24 w-24 md:h-44 md:w-44 justify-center flex items-stretch ">
                            <i class="fab fa-github hover:text-violet-700  duration-500 text-5xl md:text-8xl self-center "></i>
                        </div>
                    </a>
                </div>
                <div class="relative">
                    <a href="https://id.linkedin.com/in/arsyad-ali-mahardika-577727229">
                        <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100  px-1  md:px-2  ">Linkedin</label>
                        <div class="border-dark border-2 rounded-xl h-24 w-24 md:h-44 md:w-44 justify-center flex items-stretch ">
                            <i class="fab fa-linkedin hover:text-blue-600 duration-500 text-5xl md:text-8xl self-center "></i>
                        </div>
                    </a>
                </div>
                <div class="relative">
                    <a href="mailto:arsyadamid.work@gmail.com">
                        <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100  px-1  md:px-2  ">Gmail</label>
                        <div class="border-dark border-2 rounded-xl h-24 w-24 md:h-44 md:w-44 justify-center flex items-stretch ">
                            <img src="https://logos-world.net/wp-content/uploads/2020/11/Gmail-Logo.png" class="md:w-32  w-14 self-center duration-300 grayscale hover:grayscale-0" alt="">
                            
                        </div>
                    </a>
                </div>
                <div class="relative">
                    <a href="https://instagram.com/arsyadam.id">
                        <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100 px-1  md:px-1    ">Instagram</label>
                        <div class="border-dark border-2 rounded-xl h-24 w-24 md:h-44 md:w-44 justify-center flex items-stretch ">
                            <i class="fab fa-instagram hover:text-purple-500 duration-500 text-5xl md:text-8xl self-center "></i>
                        </div>
                    </a>
                </div>
                <div class="relative">
                    <a href="https://youtube.com/Arsyadam">
                        <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100  px-1  md:px-2  ">Youtube</label>
                        <div class="border-dark border-2 rounded-xl h-24 w-24 md:h-44 md:w-44 justify-center flex items-stretch ">
                            <i class="fab fa-youtube hover:text-red-600 duration-500 text-5xl md:text-8xl self-center "></i>
                        </div>
                    </a>
                </div>
                <div class="relative">
                    <a href="https://rpubs.com/Arsyadam">
                        <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100  px-1  md:px-2  ">Rpubs</label>
                        <div class="border-dark border-2 rounded-xl h-24 w-24 md:h-44 md:w-44 justify-center flex items-stretch ">
                            <img src="{{ asset('img/rpubs_logo.png') }}" class="md:w-28  w-14 self-center duration-300 grayscale hover:grayscale-0" alt="">
                        </div>
                    </a>
                </div>
                <div class="relative">
                    <a href="https://kaggle.com/Arsyadam">
                        <label class="absolute text-lg md:text-2xl text-dark  transform -translate-y-6 scale-75 top-2 z-10  bg-gray-100  px-1  md:px-2  ">Kaggle</label>
                        <div class="border-dark border-2 rounded-xl h-24 w-24 md:h-44 md:w-44 justify-center flex items-stretch ">
                            <img src="https://www.analyticsvidhya.com/wp-content/uploads/2015/06/kaggle-logo-transparent-300.png" class="md:w-32  w-14 self-center duration-300 grayscale hover:grayscale-0" alt="">

                        </div>
                    </a>
                </div>
                

                
            </div>
    </div>
    </section>

</x-app-layout>

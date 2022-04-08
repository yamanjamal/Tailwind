<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>yaman</title>
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        

    </head>
    <body class="bg-gradient-to-r from-black to-blue-900 text-white">
        <div class=" h-screen flex flex-col  justify-between">
            <div class="topnav ">
                <div class=" top-0 flex flex-col lg:flex-row justify-between items-center px-20 py-6   lg:mb-16">
                    <div class="mb-6">
                        <a href="" class="text-3xl py-1 inline-block text-white  hover:text-gray-500 tracking-widest ">
                            <span class="text-5xl text-red-300 ">T</span><span class="font-semibold">ravelling ... </span> </a>
                    </div>
                    <div>
                        <ul class=" flex flex-col md:flex-row items-center ">
                            <li class="mb-3"><a href="" class=" mr-8 text-xl  hover:text-white font-simebold mr-8 py-3 px-3 bg-red-300 py-3 px-3  rounded-lg">Home</a></li>
                            <li class="mb-3"><a href="" class=" mr-8 text-xl  hover:text-white rounded-lg font-simebold mr-8 py-3 px-3 hover:bg-red-300">about</a></li>
                            <li class="mb-3"><a href="" class=" mr-8 text-xl  hover:text-white rounded-lg font-simebold mr-8 py-3 px-3 hover:bg-red-300">Feature</a></li>
                            <li class="mb-3"><a href="" class=" mr-8 text-xl  hover:text-white rounded-lg font-simebold mr-8 py-3 px-3 hover:bg-red-300">Blog</a></li>
                            <li class="mb-3"><a href="" class=" mr-8 text-xl  hover:text-white rounded-lg font-simebold mr-8 py-3 px-3 hover:bg-red-300">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                {{-- ++++++++++++++++++++++++++++++++++++++++content+++++++++++++++++++++++++++++++++++++++++++ --}}
                <div class="flex flex-col md:flex-row container mx-auto ">
                    <div class="w-full lg:w-1/2 mt-8 lg:mt-20 mb-10">
                        <h2 class="text-5xl mb-10 font-bold">Travel Around The <span class="text-red-300">World.</span></h2>
                        <div class="max-w-lg">
                            
                            <p class="text-sm text-gray-400 mb-8">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit
                            </p>
                            <button class="py-2 px-8 text-lg text-gray-200 rounded-lg border-2 border-gray-400 hover:bg-blue-400 hover:text-white">See More</button>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 text-center">
                        <div class="w-2/3 inline-block rounded-full overflow-hidden">
                            <img src="{{ asset('img/mountain-4694346_1280.png') }}">
                        </div>
                    </div>
                    
                </div>    


                {{-- ++++++++++++++++++++++++++++++++++++++++content+++++++++++++++++++++++++++++++++++++++++++ --}}
            </div>

            <div class="flex justify-between items-center py-4 px-16">
                <div class="flex items-center py-2">
                    <div class="mr-4 h-6 w-6 rounded-full overflow-hidden">
                        <img src="{{ asset('img/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}">
                    </div>
                    <div class="text-sm text-gray-300 ">
                        yaman jamal
                    </div>
                </div>
                <div >
                    <ul class="flex">
                        <li><a href=""><i class="fa fa-bed  mr-4 hover:text-gray-500" ></i></a></li>
                        <li><a href=""><i class="fa fa-bomb mr-4 hover:text-gray-500" ></i></a></li>
                        <li><a href=""><i class="fa fa-bolt mr-4 hover:text-gray-500" ></i></a></li>
                        <li><a href=""><i class="fa fa-cat  mr-4 hover:text-gray-500" ></i></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </body>
</html>

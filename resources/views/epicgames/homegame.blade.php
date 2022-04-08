<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>yaman</title>
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        

    </head>
    <body class=" ">
        <div class="flex">
            <div class="w-64 deep-blue text-white min-h-screen ">
                <div class="px-10">
                    <div class="flex items-center pt-6 pb-4">
                        <div class="mr-4 h-8 w-8 rounded-full overflow-hidden">
                            <img src="{{ asset('img/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}">
                        </div>
                        <div class="text-sm font-semibold">
                            yaman jamal
                            <span class="text-gray-400">128,564$</span>
                        </div>
                    </div>
                {{-- ++++++++++++++++++++++++++++++++++search+++++++++++++++++++++++++++++++ --}}
                    <div class="relative ">
                        <div class=" py-4">
                            <input type="text" name="search" placeholder="search" 
                            class="py-2 pl-9 rounded  input-blue w-full focus:outline-none focus:shadow-outline">
                        
                        </div>
                        <div class=" absolute top-0 mt-7 ml-2">
                            <svg  fill="currentColor" class=" h-4 w-4 fill-current text-gray-400  ">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                            </svg>
                        </div>
                    </div>
                {{-- ++++++++++++++++++++++++++++++++++search+++++++++++++++++++++++++++++++ --}}
                    <h2 class="font-semibold pt-3 pb-4 mt-1">EPIC GAMES </h2>

                {{-- ++++++++++++++++++++++++++++++++++side nav+++++++++++++++++++++++++++++++ --}}
                    <ul class=" ">
                        <li class="flex ">
                            <a href="" class="py-2 w-full text-sm font-semibold hover:bg-blue-400 hover:text-gray-300">
                            <i class="mr-3 fa fa-home text-xs mr-3"></i>Home</a>
                        </li>
                        <li class="flex  ">
                            <a href="" class="py-2 w-full text-xs text-gray-300 font-semibold hover:bg-blue-400 hover:text-white">
                            <i class="mr-3 fa fa-store-alt text-xs"></i>Store</a>
                        </li>
                        <li class="flex ">
                            <a href="" class="py-2 w-full text-xs text-gray-300 font-semibold hover:bg-blue-400 hover:text-white">
                            <i class="mr-3 fa fa-book text-xs"></i>Library</a>
                        </li>
                        <li class="flex ">
                            <a href="" class="py-2 w-full text-xs text-gray-300 font-semibold hover:bg-blue-400 hover:text-white ">
                            <i class="mr-2 fa fa-user-friends text-xs"></i>Community</a> 
                        </li>
                        <li class="flex  ">
                            <a href="" class="py-2 w-full text-xs text-gray-300 font-semibold hover:bg-blue-400 hover:text-white">
                            <i class="mr-3 fa fa-cog text-xs"></i>Sttings</a>
                                
                            
                        </li>
                    </ul>
                {{-- ++++++++++++++++++++++++++++++++++side nav+++++++++++++++++++++++++++++++ --}}
                    {{-- ++++++++++++++++++++++++++++++++++second ul+++++++++++++++++++++++++++++++ --}}
                    <div class="second ul mb-8">
                        <h2 class="font-semibold pt-3 pb-4 mt-1">PLAYER</h2>

                        <ul class=" ">
                            <li class="flex">
                                <a href="" class="py-2 w-full text-sm font-semibold hover:bg-blue-400 hover:text-gray-300">
                                <i class="mr-3 fa fa-user text-xs"></i>Profile</a>
                            </li>
                            <li class="flex  ">
                                <a href="" class="py-2 w-full text-xs text-gray-300 font-semibold hover:bg-blue-400 hover:text-white">
                                <i class="mr-3 fa fa-globe-asia text-xs"></i>Activity</a>
                            </li>
                            <li class="flex  ">
                                <a href="" class="py-2 w-full text-xs text-gray-300 font-semibold hover:bg-blue-400 hover:text-white">
                                <i class="mr-3 fa fa-comments text-xs"></i>Friends</a>
                            </li>
                            <li class="flex ">
                                <a href="" class="py-2 w-full text-xs text-gray-300 font-semibold hover:bg-blue-400 hover:text-white">
                                <i class="mr-3 fa fa-cloud-download-alt text-xs"></i>Downloads </a>
                            </li>
                        
                        </ul>
                    </div>
                    {{-- ++++++++++++++++++++++++++++++++++second ul+++++++++++++++++++++++++++++++ --}}
                    {{-- ++++++++++++++++++++++++++++++++++MESSGIES+++++++++++++++++++++++++++++++ --}}
                    <div>
                        <h2 class="mb-4 font-bold text-sm">MESSAGES</h2>
                        <div class="flex">
                             <div class="mr-2 h-8 w-8 rounded-full overflow-hidden hover:opacity-75 cursor-pointer">
                                <img src="{{ asset('img/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}">
                            </div>
                             <div class="mr-2 h-8 w-8 rounded-full overflow-hidden hover:opacity-75 cursor-pointer">
                                <img src="{{ asset('img/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}">
                            </div>
                             <div class="mr-2 h-8 w-8 rounded-full overflow-hidden hover:opacity-75 cursor-pointer">
                                <img src="{{ asset('img/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}">
                            </div>
                             <div class="mr-2 h-8 w-8 rounded-full overflow-hidden hover:opacity-75 cursor-pointer">
                                <img src="{{ asset('img/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}">
                            </div>
                        </div>
                    </div>
                    {{-- ++++++++++++++++++++++++++++++++++MESSGIES+++++++++++++++++++++++++++++++ --}}


                </div>
            </div>
            <!-- ++++++++++++++++++++++++++++++++++++++++endsidebad++++++++++++++++++++++++++++++++++++++++++++ -->
            <div class="bg-blue-200 flex flex-1 ">
                <div class="w-3/5 px-8 py-3 overflow-y-auto ">
                    <div class="my-4">
                        <h2 class="mb-4 font-extrabold text-md text-gray-800">Favorite Gamest</h2>
                        <div class="flex h-28">
                            <div class="w-24 rounded-lg overflow-hidden hover:opacity-75 cursor-pointer  ">
                                <img class="h-full w-full object-cover" src="{{ asset('img/fortnite_battle_royale-wallpaper-960x540.jpg') }}">
                            </div>
                            <div class="w-24 rounded-lg overflow-hidden hover:opacity-75 cursor-pointer ml-4 ">
                                <img class="h-full w-full object-cover" src="{{ asset('img/igor-karimov-59MGmlUiqwA-unsplash.jpg') }}">
                            </div>
                            <div class="w-24 rounded-lg overflow-hidden hover:opacity-75 cursor-pointer ml-4 ">
                                <img class="h-full w-full object-cover" src="{{ asset('img/game2.jpg') }}">
                            </div>
                            <div class="w-24 rounded-lg overflow-hidden hover:opacity-75 cursor-pointer ml-4 ">
                                <img class="h-full w-full object-cover" src="{{ asset('img/game1.jpg') }}">
                            </div>
                            <div class="w-24 rounded-lg overflow-hidden ml-4 flex justify-center items-center deep-blue hover:opacity-75 cursor-pointer">
                                <span class="text-4xl text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <!-- +++++++++++++++++++++++++++++++++++++++++++game show end+++++++++++++++++++++++++++++++++++++ -->
                    <div class="" >
                        <div class="my-4 flex justify-between items-center">
                            <h2 class="font-extrabold text-md text-gray-800">Papular Games</h2>
                            <i class="fa fa-long-arrow-alt-right hover:text-gray-500 cursor-pointer"></i>
                        </div>
                        <div class="bg-white max-h-64 flex rounded-lg overflow-hidden  ">
                            <div class="w-1/2 ">
                                <img class="h-full w-full object-cover" src="{{ asset('img/game1.jpg') }}">

                            </div>
                            <div class="w-1/2 px-6 pt-8">
                                <h2 class="mb-2 text-lg text-black font-extrabold">The Outer Worlds</h2>
                                <ul class="mb-4">
                                    <li class="text-xs text-gray-500">The Outer Worlds is new</li>
                                    <li class="text-xs text-gray-500">Single player first person sci-fi</li>
                                    <li class="text-xs text-gray-500">RGB from obsidian </li>
                                    <li class="text-xs text-gray-500">Entertainment and private</li>
                                    <li class="text-xs text-gray-500">Division</li>
                                </ul>
                            <button class="px-2 py-1 text-xs rounded text-white deep-blue hover:bg-blue-400" >up to-25%</button>
                            </div>
                        </div>
                    </div>
                    <!-- +++++++++++++++++++++++++++++++++++++++++++end game discription+++++++++++++++++++++++++++++++ -->
                    <div class="" >
                        <div class="my-4 flex justify-between items-center">
                            <h2 class="font-extrabold text-md text-gray-800">News</h2>
                            <div class="flex">
                                <i class="mr-2 fa fa-th-large hover:text-gray-500 cursor-pointer"></i>
                                <i class="fa fa-bars hover:text-gray-500 cursor-pointer"></i>
                            </div>
                        </div>
                        <a href="" class="block mb-2 bg-opacity-50 bg-gray-500 rounded-lg overflow-hidden hover:opacity-75 ">
                            <div class=" h-64">
                                <img class="h-full w-full object-cover" src="{{ asset('img/the_flash_2022_movie_two_versions_of_batman-wallpaper-1280x720.jpg') }}">

                            </div>
                            <div class="px-6 py-6">
                                <h2 class="mb-2 text-lg text-white font-bold">HARLEY QUINN ARRIVES ON FORTNITE</h2>
                                <p class="text-xs text-gray-300 ">The item Shop deatures the Harley Quinn Bundle, Which includes the Harley Quinn Outfit and Harley Hitter and Punchitline Pickaxes. of you are up for hijinx, Harley arrives with new  Challenges that will transform her from Lil Monster XoXo Harley to Always Fantabulous Harley. </p>
                            </div>
                        </a >
                    </div>
                    <!-- +++++++++++++++++++++++++++++++++++++++++++end second game discription+++++++++++++++++++++++++++++++ -->
                    
                </div>

                 <div class="w-2/5">
                         <!-- max-w-md mx-auto -->
                    <div class="bg-white h-screen overflow-hidden overflow-y-auto rounded-lg my-8 mx-6">
                        <div class="px-10 py-6">
                            <div class="flex justify-between items-center">
                                <h2 class="font-extrabold text-md text-gray-800">Recently Played</h2>
                                <i class="fa fa-cog text-gray-600 hover:text-gray-400 cursor-pointer"></i>
                            </div>
                            <div class="my-6">
                                <img class="h-64 rounded overflow-hidden w-full object-cover" src="{{ asset('img/sginin2.jpg') }}">
                            </div>
                            <div >
                                <div class=" my-2 flex justify-between items-center">
                                    <h2 class="font-extrabold text-md text-gray-800">The Cycle</h2>
                                    <span class="font-bold text-md text-gray-800">43%</span>
                                </div>
                                <div class=" mb-3 flex">
                                    <div class="w-2/5 deep-blue rounded-l-lg h-2">
                                    </div>
                                    <div class="w-3/5 bg-gray-300 rounded-r-lg h-2">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button class=" px-10 py-2 text-sm font-bold rounded deep-blue text-white  hover:bg-blue-400">play</button>
                                </div>

                                <div class="mb-6">
                                    <div class="mb-2 flex items-center">
                                        <i class="mr-2 fal fa-clock"></i>
                                        <span class="text-sm text-gray-500">you have played 48 hours</span>
                                    </div>
                                    
                                    <div class="flex items-center">
                                        <i class="mr-2 fal fa-clipboard-list"></i>
                                        <span class="text-sm text-gray-500">last played 06.07.2020</span>
                                    </div>
                                </div>
                                <div class="mb-6 px-6 py-4 bg-gray-300 shadow-lg">
                                    <h4 class="mb-1 font-semibold">Achievments</h4>
                                    <div class="flex items-center">
                                        <div class="w-1/5 mr-2">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                        <div class="w-1/5 mr-2">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                        <div class="w-1/5 mr-2">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                        <div class="w-1/5 mr-2">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                        <div class="w-1/5 mr-2">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class=" px-4 bshadow-lg">
                                    <h4 class="mb-4 font-semibold">Screenshots</h4>
                                    <div class="mb-10 grid grid-cols-3 gap-2 items-center">
                                        <div class=" ">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                        <div class=" ">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                        <div class=" ">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                        <div class=" ">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>
                                        <div class=" ">
                                            <img class="rounded-lg object-cover" src="{{ asset('img/game1.jpg') }}">
                                        </div>  

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>

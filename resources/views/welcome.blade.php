<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Styles -->
        

        

    </head>
    <body class="bg-purple-700 text-white">
      
        
                <div class="flex justify-around items-center container mx-auto px-4 py-4 border-b border-blue-500  ">
           <div class="flex">
            <a href="">yaman</a>
            </div>
           <div class="flex realitve">
            <div class="absolute top-0 ">
                <svg  fill="currentColor" class=" h-4 w-4 fill-current text-purple-600 mt-9 ml-4">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                </svg>
            </div>
            <input type="text" name="search" placeholder="search " class="py-3 pl-10 bg-gray-800 rounded-full w-64 focus:outline-none focus:shadow-outline">
        </div>
           <div class="flex h-12 w-12 rounded-full overflow-hidden">
                <img src="{{ asset('img/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}">
           </div>
           
            
        </div>

        <div class="flex  ">
            <div class="w-56 border-r px-4 min-h-screen bg-green-500 py-8">
              <ul class="list-reset">
                <li class="flex items-center ">
                <i class="fa fa-home text-gray-800 mr-2"></i>
                <a href="" class="hover:text-gray-500 text-gray-800 font-bold uppercase">dashbord</a>
                </li>

                <li class="flex items-center mt-4">
                <i class="fa fa-home text-gray-800 mr-2"></i>
                <a href="" class="hover:text-gray-500 text-gray-800 font-bold uppercase">dashbord</a>
                </li>

                <li class="flex items-center mt-4  pb-4 border-b border-blue-800">
                <i class="fa fa-home text-gray-800 mr-2"></i>
                <a href="" class="hover:text-gray-500 text-gray-800 font-bold uppercase">dashbord</a>
                </li>


              </ul>
            </div>            
            <div class="w-2/3 px-8 border-r leading-screen  bg-blue-700">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>            
            <div class="w-1/3 px-8">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>


        

    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>belal</title>
                 <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="  ">

        {{-- <==================================================start hero section===========================================? --}}

            
        <div class=" text-center h-600" style="background-image: url({{ asset('img/game.jpg') }}); background-size: 100%; background-repeat: no-repeat;">
        {{-- <==================================================start nav section===========================================? --}}
            <div class=" top-0 flex justify-between px-20 py-6">
                <div>
                    <a href="" class="text-4xl text-gray-700  hover:text-gray-500 tracking-widest uppercase">
                        <span class="text-5xl font-bold">p</span><span class="font-semibold">ortfolio</span> </a>
                </div>
                <div>
                    <ul class=" flex items-center">
                        <li><a href="" class="text-gray-700 mr-6 hover:text-gray-300 font-semibold mr-8">Home</a></li>
                        <li><a href="" class="text-gray-700 mr-6 hover:text-gray-300 font-semibold mr-8">Work</a></li>
                        <li><a href="" class="text-gray-700 mr-6 hover:text-gray-300 font-semibold mr-8">Blog</a></li>
                        <li><button class="py-3 px-6 text-blue-600 rounded-full border-2 border-blue-500 hover:bg-blue-400 hover:text-white">Hire Me!</button></li>
                    </ul>
                </div>
            </div>
        {{-- <==================================================start nav section===========================================? --}}
            <div class="flex max-w-xl mx-auto">
               <div class="flex flex-col justify-center ">
                <div class=" "> 
                   <div class=" font-semibold text-4xl  ">
                       Beautiful. Clean. Responsive.
                    </div>
                    <div class=" ">
                        REEN is a high-quality solution for those who want a beautiful website in no time its fully responsive and will adapt itself to any mobile device. ipad, iphone, Android, it doesnt matter. Your content will always looks its absolute best.
                    </div>
                </div>
                 <div class=""> 
                  
                </div>
                   
               </div>
                
            </div>
        </div>   
        
        {{-- <==================================================end hero section===========================================? --}}
                    
    </body>
</html>

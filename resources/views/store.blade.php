<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>yaman</title>
         <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        

    </head>
    <body class="bg-gray-200 ">
        <div class="pb-2 max-w-sm mx-auto rounded-lg shadow-lg bg-white mt-32">
            <div class="flex justify-center ">
                    <div class=" px-12 py-8 text-center bg-white shadow-xl -mt-16 flex-col border-2 border-purple-400 cir">
                        <div class="text-3xl text-purple-700 font-bold">382</div>
                        <div class="text-sm text-gray-700 font-semibold">SOLD</div>
                        <div class="text-sm text-gray-400">out of</div>
                        <div class="text-sm text-gray-400">975</div>
                </div>
            </div>
            <div class="flex justify-between mb-12">
                <div class="bg-purple-800 px-10 text-white py-2">
                    AED $0.00
                </div>
                <div class="flex -mt-16 mr-3">
                    <div class="bg-purple-500 rounded-lg w-8 h-8 mr-2">
                    </div>
                    <div class="bg-purple-900 rounded-lg w-8 h-8"></div>
                </div>
            </div>

            <div class=" mb-5">
                <img class="h-48 w-full object-cover" src="{{ asset('img/fortnite_battle_royale-wallpaper-960x540.jpg') }}">
            </div>
            <div class="text-center text-gray-900 font-semibold mb-8">
                buy a
            </div>
        </div>
       
    </body>
</html>

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
    <body class="bg-white text-gray-500 ">
        {{-- information nav start --}}
        <div class="information-nav flex justify-around items-center  bg-gray-100  px-4 py-1 border-b border-gray-200  ">
           <div class="flex">
                <div class="flex items-center">
                    <i class="fa fa-envelope mr-2 text-xs"></i>
                    <a href="" class="text-xs">yamanjamal@gmail.com</a>
                </div>
                <div class="flex items-center ml-8 ">
                    <i class="fa fa-mobile-alt mr-2 text-xs"></i>
                    <a href="" class="text-xs">0951414583</a>
                </div>
            </div>
            <div class="flex hidden md:block ">
                <a href=""><i class="fa fa-laptop-code text-red-200 mr-2" ></i></a>
                <a href=""><i class="fa fa-database text-pink-800 mr-2" ></i></a>
                <a href=""><i class="fa fa-laptop text-red-800 mr-2" ></i></a>
            </div>
        </div>
        {{-- end information navbar --}}

        {{--================================== start  top navbar============================= --}}
        <div class="top-nav flex flex-col  lg:flex-row justify-center items-center px-4 py-6 ">
            <div class="logo flex items-center mb-6 lg:mb-0">
                 <div class="flex h-10 w-10 rounded-full overflow-hidden"><img src="{{ asset('img/pop.webp') }}"></div>
                 <div>
                     <span class=" text-3xl font-semibold ml-2 ">LOGO</span>
                
                 </div>
            </div>

            <ul class=" list-rest md:flex md:ml-16 justfiy-between text-center mb-6 lg:mb-0">
                <li class=" ">
                    <a href="" class="md:mr-4 text-xs uppercase font-bold hover:text-gray-400 ">home</a>
                    
                </li>
                <li>
                    <a href="" class="md:mr-4 text-xs uppercase font-bold hover:text-gray-400  md:pl-6">pottofolio</a>
                    
                </li>
                <li>
                    <a href="" class="md:mr-4 text-xs uppercase font-bold hover:text-gray-400  md:pl-6">blog</a>
                    
                </li>
                <li>
                    <a href="" class="md:mr-4 text-xs uppercase font-bold hover:text-gray-400  md:pl-6">pages</a>
                    
                </li>
                <li>
                    <a href="" class="md:mr-4 text-xs uppercase font-bold hover:text-gray-400  md:pl-6">featuers</a>
                    
                </li>
                <li>
                    <a href="" class="md:mr-4 text-xs uppercase font-bold hover:text-gray-400 -600 md:pl-6">mega menu</a>
                    
                </li>
                <li>
                    <a href="" class="md:mr-4 text-xs uppercase font-bold hover:text-gray-400 -600 md:pl-6">contact</a>
                    
                </li>

            </ul>
            {{-- start search box --}}
            <div class="flex  mb-6 lg:mb-0">
                <div class="relative">
                    <input type="text" name="search" placeholder="search ..." class="py-2 pl-10 rounded-full w-48 border border-green-400 focus:outline-none focus:shadow-outline">
                    
                </div>
                <div class="absolute lg:top-0 lg:mt-0 md:-mt-16 -mt-16 ">
                    <svg  fill="currentColor" class=" h-4 w-4 fill-current  mt-22 ml-4">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                    </svg>
                </div>
            </div>
                {{-- ========================================Avatar============================= --}}
            <div class=" lg:ml-4 flex items-center h-12 w-12 rounded-full overflow-hidden">
                <img src="{{ asset('img/midas-hofstra-a6PMA5JEmWE-unsplash.jpg') }}">
            </div>
                {{-- ========================================Avatar============================= --}}
           
         </div>
            {{-- end search box --}}


        </div>
                {{--================================== start  top navbar============================= --}}


        {{-- <==================================================start hero section===========================================? --}}
            
        <div class="relative w-full">
            <div class="bg-green-800 w-full h-full top-0 left-0 absolute opacity-40"></div>
            <div class=" flex justify-center items-center ">
                <div class="absolute ">
                    <div  class="md:w-120">
                        <div class="text-4xl text-center  lg:text-6xl text-white font-bold uppercase">
                            made for designers
                        </div>
                        <div class=" text-white text-center px-3 md:max-w-2xl md:mx-auto md:text-sm text-xs mt-4 ">
                            Create your online protfolio in minuteswith the professionaly and lovingly designed REEN
                             website template. Customize your site with versatile and easy to use featuers.
                        </div>
                    </div>
                        
                    <div class="flex justify-center mt-3">
                        <button class="py-3 px-12 md:py-4 md:px-16 bg-green-500 text-white mt-8 hover:bg-green-400 md:uppercase">Get Started Now</button>
                    </div>
                </div>
                <img src="{{ asset('img/up.jpg') }}">
            </div>
        </div>

        {{-- <==================================================end hero section===========================================? --}}
        {{-- <==================================================start featuers section===========================================? --}}

        <section class=" bg-white ">
            <div class="pt-12 pb-16">
                    
                <div class="contain mx-auto  ">
                    <div class="text-center text-gray-600 font-bold text-3xl tracking-tight  ">
                       Beautiful. Clean. Responsive.
                    </div>
                    <div class="text-center text-base mt-6">
                        REEN is a high-quality solution for those who want a beautiful website in no time.<br class="lg:block"> its fully responsive and will adapt itself to any mobile device. ipad, iphone, Android,<br class="lg:block"> it doesnt matter. Your content will always looks its absolute best.
                    </div>
                </div>
                <div class="container mx-auto px-2 lg:px-16 pt-16  ">
                    <div class="flex flex-col lg:flex-row">
                        <div class=" flex mb-6 ">
                            <div class="mr-2 ">
                               <i class="far fa-heart svgs text-3xl "></i>
                            </div>
                            <div class="flex-col ">
                               <div class="text-xl text-gray-600 font-bold ">
                                   Position<br>
                               </div>
                               <div class="mt-2 ml-2 text-gray-500">
                                Magnis modipsae que lib voloratati andigen daepeditem quiate re porem aut labor. laceaque quiae sitiorem rest non restibusaes maio es dem tumquam core posae volor remped modis volor.
                               </div>
                            </div>
                        </div>
                        <div class=" flex mb-6 ">
                            <div class="mr-4 ">
                               <i class="far fa-lightbulb svgs text-3xl "></i>
                            </div>
                            <div class="flex-col ">
                               <div class="text-xl text-gray-600 font-bold ">
                                   Creativity<br>
                               </div>
                               <div class="mt-2 ml-2 text-gray-500">
                                Magnis modipsae que lib voloratati andigen daepeditem quiate re porem aut labor. laceaque quiae sitiorem rest non restibusaes maio es dem tumquam core posae volor remped modis volor.
                               </div>
                            </div>
                        </div>

                        <div class=" flex mb-6 ">
                            <div class="mr-2 ">
                               <i class="far fa-star svgs text-3xl" ></i>
                            </div>
                            <div class="flex-col">
                               <div class="text-xl text-gray-600 font-bold  ">
                                   Quality<br>
                               </div>
                               <div class="mt-2 ml-2 text-gray-500">
                                Magnis modipsae que lib voloratati andigen daepeditem quiate re porem aut labor. laceaque quiae sitiorem rest non restibusaes maio es dem tumquam core posae volor remped modis volor.
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            {{-- <==================================================end featuers section===========================================? --}}

            {{-- <==================================================start lates work section===========================================? --}}
            <section class="py-8 pb-16 bg-gray-100 mt-2 ">
                <div class=" pt-6 ">
                    <div class="text-center text-gray-600 font-semibold text-4xl  ">
                       Check out our lates works
                    </div>
                    <div class="text-center  text-base mt-6">
                        Magnis modipase que voloratati andigen daepeditem quite re porem aut labor.
                    </div>
                </div>

                <div class=" pt-12  ">
                    <div class="max-w-3xl mx-auto">
                            
                        <div class="flex flex-col md:flex-row   ">
                            <div class="bg-white mb-8 w-full md:max-w-sm mr-6 rounded-lg overflow-hidden" >
                                    <img src="{{ asset('img/32.jpg') }}" class=" ">
                                <div class=" p-6 pb-6 ">
                                   <div class="text-base tracking-tight text-center  text-gray-600 font-bold ml-3">
                                       Grand Motael gets an identity brushup
                                       <div class="text-xs text-gray-400  ">
                                           identity
                                       </div>
                                   </div>
                                </div>
                            </div>
                            <div class="bg-white mb-8 w-full md:max-w-sm rounded-lg overflow-hidden">
                                    <img src="{{ asset('img/m4.jpg') }}" class=" ">
                                <div class=" p-6 pb-6  ">
                                   <div class="text-base tracking-tight text-center  text-gray-600 font-bold ml-3">
                                       Grand Motael gets an identity brushup
                                       <div class="text-xs text-gray-400  ">
                                           identity
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                         <div class=" flex flex-col md:flex-row   ">
                            <div class="bg-white mt-6  mr-6 rounded-lg overflow-hidden w-full md:w-1/4" >
                                    <img src="{{ asset('img/cm1.jpg') }}" class=" ">
                                
                            </div>
                            <div class="bg-white mt-6  mr-6 rounded-lg overflow-hidden w-full md:w-1/4" >
                                    <img src="{{ asset('img/f1.jpg') }}" class=" ">
                                
                            </div>
                            <div class="bg-white mt-6  mr-6 rounded-lg overflow-hidden w-full md:w-1/4" >
                                    <img src="{{ asset('img/f2.jpg') }}" class=" ">
                                
                            </div>
                            <div class="bg-white mt-6 mr-6 rounded-lg overflow-hidden w-full  md:w-1/4 " >
                                    <img src="{{ asset('img/s.jpg') }}" class=" ">
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        {{-- <==============================================end lates work section===========================================? --}}

        {{-- <==============================================start  work for us section===========================================? --}}
        <section class="sectionwork py-8 px-8 ">
            <div class="">
                <div class="mt-28  ">
                    <div class="text-center text-gray-600 font-semibold text-4xl  ">
                       Want to work with us?
                    </div>
                    <div class="text-center text-base mt-6">
                        Magnis modipase que voloratati andigen daepeditem quite re porem aut labor.<br class="md:block hidden">
                        laceque quiae sitiorem rest nen restibusaes maio es dem tumquam.
                    </div>
                    <div class="flex justify-center mt-6">
                        <button class="py-4 px-8 mt-3 bg-green-500 text-white text-xs  hover:bg-green-400">GET IN TOUCH</button>
                    </div>
                </div>
            </div>
        </section>
        {{-- <==============================================end  work for us section===========================================? --}}
            
        <section class="py-16  bg-gray-800">
            <div class="contain mx-auto">
                
               <div class=" flex flex-col lg:flex-row text-white ">
                    <div class="w-full   py-8 border-b border-gray-200 lg:border-none lg:w-1/4 mr-8">
                        <span class=" text-sm ">WHO WE ARE</span>
                        <h2 class="text-4xl text-bold uppercase">logo.</h2>
                        <div class="mt-3 text-gray-500 text-sm">
                            Magnis modipase voloratati andigen daepeditem qulate re porem aut labor.
                            laceque eictemperum quiae sitiorem rest nen restibusaes maio es dem tumquam.
                        </div>
                        <div class="mt-4">
                            <a href="#" class="text-gray-300">More about us -></a>
                        </div>

                    </div>
                    
                    <div class="w-full   py-8 border-b border-gray-200 lg:border-none lg:w-1/4 mr-8">
                        <span class=" text-sm tracking-widest ">LATEST WORKS</span>
                        <div class="mt-4">
                            <div class=" flex  justify-center ">
                                <div class=" mt-2  mr-1 rounded-lg overflow-hidden w-1/2" >
                                        <img src="{{ asset('img/cm1.jpg') }}" class=" ">
                                </div>
                                <div class=" mt-2 mr-1 rounded-lg overflow-hidden w-1/2" >
                                        <img src="{{ asset('img/f1.jpg') }}" class=" ">
                                </div>
                            </div>
                            <div class=" flex  justify-center ">
                                 <div class=" mt-2  mr-1 rounded-lg overflow-hidden w-1/2" >
                                        <img src="{{ asset('img/f2.jpg') }}" class=" ">
                                    
                                </div>
                                <div class=" mt-2  mr-1 rounded-lg overflow-hidden w-1/2" >
                                        <img src="{{ asset('img/s.jpg') }}" class=" ">
                                </div>                               
                            </div>
                        </div>
                    </div>

                    <div class="w-full   py-8 border-b border-gray-200 lg:border-none lg:w-1/4 mr-8">
                        <span class=" text-sm tracking-widest">GET IN TOUCH</span>
                        <div class="mt-3 text-gray-500 text-sm">
                           Doloreiur quia commolu patatemp dolupta oreprerum tibusam eumenis et consent accullignis dentibea autem inisita. 
                        </div>
                        <div class="mt-1 text-gray-400">
                            <div>
                                <i class="fa fa-map-marker-alt mr-2 text-xs"></i>
                                <a href="" class="text-xs">84 Street, City, State 24813</a>
                            </div>
                            <div>
                                <i class="fa fa-mobile-alt mr-2 text-xs"></i>
                                <a href="" class="text-xs">0951414583</a>
                            </div>
                            <div>
                                <i class="fa fa-envelope mr-2 text-xs"></i>
                                <a href="" class="text-xs">yamanjamal@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full   py-8 border-b border-gray-200 lg:border-none lg:w-1/4 mr-8">
                        <span class=" text-sm tracking-widest">FREE UPDATES</span>
                        <div class="mt-3 text-gray-500 text-sm lowercase">
                           CONECUS IURE POSAE VOLOR REMPED MODIS AUT LOR VOLOR ACCABORA INCIM RESTO EXPLABO
                        </div>
                        <div class="mt-6 ">
                            <input type="text" name="search" placeholder="Enter eamil  " 
                            class="pt-2 pb-3 rounded  pl-4 placeholder-gray-400 bg-gray-600 w-44  md:w-52 focus:outline-none focus:shadow-outline">
                            <div class=" mt-2">
                                <button class="py-2 px-5  rounded bg-green-700 text-white text-xs  hover:bg-green-400 tracking-widest">SUBSCRIBE</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section> 
    </body>
</html>

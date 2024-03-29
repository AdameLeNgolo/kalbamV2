<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ config('app.name') }} </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
    {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ config('app.url') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/logoV.png') }}" class="h-16" alt="Kalbam Logo" />
                {{-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name') }}</span> --}}
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="about" class="relative md:h-screen py-16 sm:py-10">

        <div class="md:size-2/6 md:ml-24 ml-10 md:top-20 top-5 absolute px-3">
            <p class="md:text-9xl sm:text-6xl xs:text-4xl text-3xl">
                Un controle total sur vos depenses !
            </p>

        </div>

        <div class="md:absolute mt-10 bottom-32 right-0 text-right px-3 md:px-0">
            <img src="https://images.pexels.com/photos/5466785/pexels-photo-5466785.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                class="shadow-2xl shadow-[#E0EAF4] md:rounded-l-2xl rounded-2xl  " alt="">
            <p class="italic font-light mt-2 text-xs md:text-base">Avec <a href="/">Kalbam</a> toutes vos depenses sont a votre portee.
            </p>
        </div>

    </div>





    <div id="about" class="h-screen bg-[#0F70B7] text-white text-center flex items-center">
       <div class="flex items-center space-x-20">
            <h1 class="basis-1/4 text-9xl">A Propos !</h1>

            <div class="basis-3/4 text-xl px-10">
                <p class="border px-20 rounded-br-3xl py-20 leading-loose hover:shadow-2xl hover:shadow-white">
                    Kalbam est une solution digitale qui offre aux utilisateurs d’avoir  une meilleure gestion de leur trésorerie. 
                    Elle permet à l’utilisateur, après avoir enregistré ses revenus qui peuvent être salariaux, recette ou bénéfice de commerce ou une cagnotte ou tontine d’un regroupement de personnes etc., 
                    d’avoir une vue globale sur l’ensemble de ses dépenses journalières, hebdomadaires ou mensuelles. Ceci lui donnerait une idée sur comment il effectue ses dépenses et sur quelle fréquence. 
                    Kalbam dispense assez de ressources afin que l’utilisateur prenne une meilleure décision sur les futures dépenses. 
                </p>
            </div>
       </div>
    </div>

    <div id="service" class="h-screen py-20">
        <div class="text-center">
            <h1 class="text-center text-9xl">Service</h1>
            <p class="max-w-2xl mx-auto mt-10">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur velit cum inventore, aliquid reiciendis ea similique ducimus, sunt repudiandae iste non voluptatum? Necessitatibus magnam ex accusantium suscipit delectus dolore sed.
            </p>
        </div>

        <div class="grid grid-flow-row grid-cols-3 gap-10 mt-20 text-center px-10">
            <div class="border-4 rounded-md px-10 py-5 space-y-10">
                <div class="mt-5">
                    <p class="text-lg bg-red-600 py-3 rounded-b-full">Portefeuille</p>
                </div>
                <div class="pb-5">
                    <p>
                        Kalbam vous offre une large possibilite d'avoir une a plusieurs portefeuille(s). Ces portefeuilles peuvent etre d'utilisation personnelle ou pour une association, voir meme GIE.
                    </p>
                </div>
            </div>

            <div class="border-4 rounded-md px-10 py-5 space-y-10">
                <div class="mt-5">
                    <p class="text-lg bg-red-600 py-3 rounded-b-full">Revenues et depenses</p>
                </div>
                <div class="pb-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nisi cum nostrum enim doloremque molestias, dicta pariatur tempore iste necessitatibus doloribus harum corporis quaerat quis.</p>
                </div>
            </div>

            <div class="border-4 rounded-md px-10 py-5 space-y-10">
                <div class="mt-5">
                    <p class="text-lg bg-red-600 py-3 rounded-b-full">Frequence de suivi</p>
                </div>
                <div class="pb-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nisi cum nostrum enim doloremque molestias, dicta pariatur tempore iste necessitatibus doloribus harum corporis quaerat quis.</p>
                </div>
            </div>

            
        </div>
    </div>

</body>

</html>

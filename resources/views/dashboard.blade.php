<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .cartoes{
            display:flex;
            justify-content: space-between;
            flex-direction:row;
            margin: 0px 75px;
        }

        .tamanho{
            width: 200px;
        }

        .olhar{
            background-color:#590202
        }

    </style>
</head>
<body>
    
</body>
</html>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <!-- {{ __("Seja bem-vindo!") }}-->
                    <h1>Seja bem-vindo(a), {{ auth()->user()->name }}!</h1>
                </div>
            </div>
        </div>
    </div>

<div class="cartoes">
<div class=" tamanho max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow white:bg-white-800">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark">Filmes</h5>
    </a>
    <a href="{{route('filmes.index')}}" class=" olhar inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-800 dark:focus:ring-blue-800">
        Ver
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>
<div class=" tamanho max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow white:bg-white-800">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark">Comidas</h5>
    </a>
    <a href="{{route('comidas.index')}}" class="olhar inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-800 dark:focus:ring-blue-800">
        Ver
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>
<div class="tamanho max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow white:bg-white-800">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark">Gêneros</h5>
    </a>
    <a href="{{route('generos.index')}}" class="olhar inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-800 dark:focus:ring-blue-800">
        Ver
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>
<div class="tamanho max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow white:bg-white-800">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-dark">Promoções</h5>
    </a>
    <a href="{{route('promocoes.index')}}" class="olhar inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg h focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-red-800 dark:focus:ring-blue-800">
        Ver
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>
</div>
</div>
</x-app-layout>

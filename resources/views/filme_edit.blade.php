<x-app-layout>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário com Tailwind CSS</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    input{
      margin: 10px 0;
    }

    label{
      margin: 10px 0;
    }
  </style>
</head>
<body class="bg-gray-100">

  <div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Cadastro de Filmes</h2>
      <form action="{{route ('filmes.update', ['filme' => $filme->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-4">
          <label for="nome" class="block text-gray-600 font-medium">Nome</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$filme->nome}}" name="nome"/>

          <label for="nome" class="block text-gray-600 font-medium">Classificação</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$filme->classificacao}}" name="classificacao"/>

          <label for="nome" class="block text-gray-600 font-medium">Ano</label>
          <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$filme->ano}}" name="ano"/>

          <label for="genero" class="block text-gray-600 font-medium">Gênero</label>
          <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="id_genero" id="genero">
        <option disabled selected hidden>Selecione um Gênero</option>
        @foreach($generos as $genero)
            <option value="{{ $genero->id}}">{{ $genero->nome }}</option>
        @endforeach
    </select>
        </div>
        <div class="mb-4">
        </div>
        <button type="submit" class="w-full bg-red-900 text-white py-2 rounded-lg">Editar</button>
        <a href="{{ route('filmes.index')}}"><button data-mdb-ripple-init type="button" id="criar" class="w-full py-2 rounded-lg transition duration-200">Voltar</button></a>
      </form>
    </div>
  </div>
</body>
</html>
</x-app-layout>
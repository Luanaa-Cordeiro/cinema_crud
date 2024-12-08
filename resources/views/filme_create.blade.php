<x-app-layout>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário com Tailwind CSS</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Cadastro de Filmes</h2>
      <form action="{{ route('filmes.store')}}" method="post">
@csrf
  <div data-mdb-input-init class="form-outline mb-4">
    <input value='{{old("nome")}}' type="text" id="form1Example2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nome" placeholder="Nome" />

    <input value='{{old("classificacao")}}' type="text" id="form1Example2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="classificacao" placeholder="Classificação" />

    <input value='{{old("ano")}}' type="number" id="form1Example2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="ano" placeholder="Ano" />

    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="id_genero" id="genero">
        <option disabled selected hidden>Selecione um Gênero</option>
        @foreach($generos as $genero)
            <option value="{{ $genero->id}}">{{ $genero->nome }}</option>
        @endforeach
    </select>
  </div>

<div id="botao_criar">
  <button data-mdb-ripple-init type="submit" id="criar" class="w-full bg-red-900 text-white py-2 rounded-lg">Criar</button>
  <a href="{{ route('filmes.index')}}"><button data-mdb-ripple-init type="button" id="criar" class="w-full py-2 rounded-lg transition duration-200">Voltar</button></a>
</div>
</form>
    </div>
  </div>
</body>
</html>
</x-app-layout>
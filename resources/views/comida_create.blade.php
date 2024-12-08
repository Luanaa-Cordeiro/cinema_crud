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
      <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Cadastro de Comidas</h2>
      <form action="{{ route('comidas.store')}}" method="post">
@csrf
  <div data-mdb-input-init class="form-outline mb-4">
    <input value='{{old("nome")}}' type="text" id="form1Example2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nome" placeholder="Nome" />

    <input value='{{old("quantidade")}}' type="number" id="form1Example2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="quantidade" placeholder="Quantidade" />
  </div>

<div id="botao_criar">
  <button data-mdb-ripple-init type="submit" id="criar" class="w-full bg-red-900 text-white py-2 rounded-lg">Criar</button>
  <a href="{{ route('comidas.index')}}"><button data-mdb-ripple-init type="button" id="criar" class="w-full py-2 rounded-lg transition duration-200">Voltar</button></a>
</div>
</form>
    </div>
  </div>
</body>
</html>
</x-app-layout>
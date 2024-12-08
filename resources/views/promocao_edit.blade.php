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
      <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Cadastro de Promoções</h2>
      <form action="{{route ('promocoes.update', ['promocao' => $promocao->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-4">
          <label for="nome" class="block text-gray-600 font-medium">Nome</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$promocao->disponiveis}}" name="disponiveis"/>

          <label for="valor_atual" class="block text-gray-600 font-medium">Valor Atual</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$promocao->valor_atual}}" name="valor_atual"/>

          <label for="valor_promocao" class="block text-gray-600 font-medium">Valor Promocional</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$promocao->valor_promocao}}" name="valor_promocao"/>
        </div>
        <div class="mb-4">
        </div>
        <button type="submit" class="w-full bg-red-900 text-white py-2 rounded-lg">Editar</button>
        <a href="{{ route('promocoes.index')}}"><button data-mdb-ripple-init type="button" id="criar" class="w-full py-2 rounded-lg transition duration-200">Voltar</button></a>
      </form>
    </div>
  </div>
</body>
</html>
</x-app-layout>
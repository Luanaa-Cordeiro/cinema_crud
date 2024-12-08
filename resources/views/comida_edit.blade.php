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

    .alerta{
      margin:0px 20px 10px 0;
    }

    #alert{
      margin:8px 0px 0px 0;
    }
  </style>
</head>

<body class="bg-gray-100">





  <div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <div class="alerta">
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div id="alert" class="bg-red-100 border  text-red-700 px-4 py-3 rounded relative" role="alert">
<span class="block sm:inline"> {{$error}}</span>
<span class="absolute top-0 bottom-0 right-0 px-4 py-3">
  <svg id="close-alert" class="fill-current h-6 w-6 text-red-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
    <title>Close</title>
    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
  </svg>
</span>
</div>
    @endforeach
@endif
</div>
      <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-center">Cadastro de Comidas</h2>
      <form action="{{route ('comidas.update', ['comida' => $comida->id])}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-4">
          <label for="nome" class="block text-gray-600 font-medium">Nome</label>
          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$comida->nome}}" name="nome"/>

          <label for="nome" class="block text-gray-600 font-medium">Quantidade</label>
          <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$comida->quantidade}}" name="quantidade"/>
        </div>
        <div class="mb-4">
        </div>
        <button type="submit" class="w-full bg-red-900 text-white py-2 rounded-lg">Editar</button>
        <a href="{{ route('comidas.index')}}"><button data-mdb-ripple-init type="button" id="criar" class="w-full py-2 rounded-lg transition duration-200">Voltar</button></a>
      </form>
    </div>
  </div>
</body>
</html>

<script>
  // Seleciona todos os botões de fechar (com a classe "fill-current") e os alerta
  const closeButtons = document.querySelectorAll('.fill-current');

  closeButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Encontra o alerta mais próximo do botão de fechar e o oculta
      const alertBox = button.closest('.bg-red-100');
      if (alertBox) {
        alertBox.style.display = 'none'; 
      }
    });
  });
</script>
</x-app-layout>
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
      margin: 20px 0;
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

      <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Cadastro de Filmes</h2>
      <form action="{{ route('filmes.store')}}" method="post">
@csrf
  <div data-mdb-input-init class="form-outline mb-4">
    <input value='{{old("nome")}}' type="text" id="form1Example2" class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-800 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nome" placeholder="Nome" />

    <input value='{{old("classificacao")}}' type="number" max="18" min="12" id="form1Example2" class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-800 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" name="classificacao" placeholder="Classificação" />

    <input value='{{old("ano")}}' type="number" id="form1Example2" class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-800 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" name="ano" placeholder="Ano" />

    <select class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-white-600 dark:border-gray-500 dark:placeholder-white-800 dark:text-dark dark:focus:ring-primary-500 dark:focus:border-primary-500" name="id_genero" id="genero">
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
</body>
</html>
</x-app-layout>
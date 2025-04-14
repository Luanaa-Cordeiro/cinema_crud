<x-app-layout>
<style>
body{
padding:0;
margin:0;
box-sizing: border-box;
}
.table_itens{
    display:flex; 
    justify-content: space-between;
    align-items: center;
    margin: 20px 50px;
}

.table_itens button{
    background-color:#590202;
    color:white;
    border-radius:10px;
    padding: 10px 20px;
}

#deletar{
    background-color:#B50000;
    color:white;
    padding: 4px 8px;
    border-radius:10px;
    margin-left:5px;
}

#editar{
    background-color:#0D3900;
    color:white;
    padding: 4px 8px;
    border-radius:10px;
}

.table_itens h1{
font-size:35px;
font-weight:700;
}

.tabela{
   padding: 10px 50px;
}

.alerta{
    padding: 0px 50px 5px;
}

</style>

    <div class="table_itens">
    <h1>Comidas</h1>
<a href="{{route('comidas.create')}}"><button>Adicione aqui</button></a>
</div>

<div class="alerta">
@if(session()->has('message'))
            <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">

  <span class="block sm:inline"> {{ session()->get('message') }}</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg id="close-alert" class="fill-current h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
      <title>Close</title>
      <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
    </svg>
  </span>
</div>
@endif
</div>

<div class="tabela">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class=" w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3"style="background-color:#590202; color:white;">Id</th>
                <th scope="col" class="px-6 py-3"style="background-color:#590202; color:white;">Nome</th>
                <th scope="col" class="px-6 py-3"style="background-color:#590202; color:white;">Quantidade</th>
                <th scope="col" class="px-6 py-3" style="background-color:#590202; color:white;" id='ação'>Ações</th>   
            </tr>
        </thead>
        <tbody>
        @foreach($comidas as $comida)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                {{$comida->id}}
                </td>
                <td class="px-6 py-4">
                {{$comida->nome}}
                </td>
                <td class="px-6 py-4">
                {{$comida->quantidade}}
                </td>
                <td id='botões' class="px-6 py-4">
                <a href="{{ route('comidas.edit', ['comida' => $comida->id]) }}"><button id="editar">Editar</button></a>
                <a href="{{route('comidas.show',['comida' => $comida->id])}}"><button id="deletar">Deletar</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

<script>
  const closeButton = document.getElementById('close-alert');
  const alertBox = document.getElementById('alert');

  closeButton.addEventListener('click', () => {
    alertBox.style.display = 'none'; 
  });
</script>
</x-app-layout>
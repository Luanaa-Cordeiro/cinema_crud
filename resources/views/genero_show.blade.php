<x-app-layout>
<style>
.mostrar{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
    margin-top:60px
}

.mostrar h1{
    font-size:50px;
}

.mostrar button{
    background-color:#B50000;
    color:white;
    border-radius:10px;
    padding: 10px 50px;
    margin-top:10px;
}

</style>

<div class="mostrar">
<h1>Gênero selecionado - {{$genero->nome}}</h1>
<form action="{{ route('generos.destroy', ['genero' => $genero->id]) }}" method="post">
@csrf

    <input type="hidden" name="_method" value="delete">
    <div class="botoes_deletar">
    <button type='submit'>Deletar</button><br>
    <a href="{{ route('generos.index')}}"><button data-mdb-ripple-init type="button" class="w-full py-2 rounded-lg transition duration-200" style=" background-color:transparent; color:black;">Voltar</button></a>
    </div>
</form>
</div>
</x-app-layout>
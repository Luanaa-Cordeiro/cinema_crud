<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Filme; 
use App\Models\Genero; 

class FilmeController extends Controller
{
    public readonly Filme $filme;

    public function __construct(){
        $this->filme = new Filme();
    }

    public function index()
    {

        $filmes = Filme::with('genero')
        ->select('id', 'nome', 'id_genero')
        ->get()
        ->map(function ($filme) {
            return [
                'id' => $filme->id,
                'nome' => $filme->nome,
                'genero' => $filme->genero->nome,
            ];
        });

        $generos = Genero::all();
        $filme = $this->filme->all();
        return view('filmes',['filmes' => $filme], ['generos' => $generos]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Genero::all();
        return view('filme_create', ['generos' => $generos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->filme->create([
            'nome' => $request->input('nome'), 
            'classificacao' => $request->input('classificacao'), 
            'ano' => $request->input('ano'), 
            'id_genero' => $request->input('id_genero'), 
        ]);

        if($created){
           return redirect()->route('filmes.index')->with('message', 'Filme "' . $created->nome  . '" criado com sucesso');
        }

        return redirect()->route('filmes.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filme $filme)
    {
        return view('filme_show',['filme' => $filme]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filme $filme)
    {
        $generos = Genero::all();
        return view('filme_edit', ['filme' => $filme], ['generos' => $generos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->filme->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('filmes.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('filmes.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->filme->where('id',$id)->delete();

       return redirect()->route('filmes.index')->with('message','Deletado com sucesso');
    }
}
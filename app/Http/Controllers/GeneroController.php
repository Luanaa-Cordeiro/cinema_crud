<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genero;
use Illuminate\Http\Request;
use App\Http\Requests\GeneroRequest;

class GeneroController extends Controller
{

    public readonly Genero $genero;

    public function __construct() {
        $this->genero = new Genero();
    }
    
    public function index()
    {
        $generos = $this->genero->all();
        return view('generos', ['generos' => $generos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genero_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->genero->create([
            'nome' => $request->input('nome'), 
        ]);

        if($created){
           return redirect()->route('generos.index')->with('message', 'Gênero "' . $created->nome  . '" criado com sucesso');
        }

        return redirect()->route('generos.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genero $genero)
    {
        return view('genero_show',['genero' => $genero]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        return view('genero_edit', ['genero' => $genero]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->genero->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('generos.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('generos.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->genero->where('id',$id)->delete();

       return redirect()->route('generos.index')->with('message','Deletado com sucesso');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comida;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComida;

class ComidaController extends Controller
{

    public readonly Comida $comida;

    public function __construct() {
        $this->comida = new Comida();
    }
    
    public function index()
    {
        $comidas = $this->comida->all();
        return view('comidas', ['comidas' => $comidas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comida_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComida $request)
    {
        $created = $this->comida->create([
            'nome' => $request->input('nome'), 
            'quantidade' => $request->input('quantidade'), 
        ]);

        if($created){
           return redirect()->route('comidas.index')->with('message', 'Comida "' . $created->nome  . '" criada com sucesso');
        }

        return redirect()->route('comidas.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comida $comida)
    {
        return view('comida_show',['comida' => $comida]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comida $comida)
    {
        return view('comida_edit', ['comida' => $comida]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComida $request, string $id)
    {
        $updated = $this->comida->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('comidas.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('comidas.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->comida->where('id',$id)->delete();

       return redirect()->route('comidas.index')->with('message','Deletado com sucesso');
    }
}

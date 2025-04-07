<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sala;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSala;

class SalaController extends Controller
{

    public readonly Sala $sala;

    public function __construct() {
        $this->sala = new Sala();
    }
    
    public function index()
    {
        $salas = $this->sala->all();
        return view('salas', ['salas' => $salas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sala_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSala $request)
    {
        $created = $this->sala->create([
            'nome' => $request->input('nome'), 
            'quantidade' => $request->input('quantidade'), 
        ]);

        if($created){
           return redirect()->route('salas.index')->with('message', 'sala "' . $created->nome  . '" criada com sucesso');
        }

        return redirect()->route('salas.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sala $sala)
    {
        return view('sala_show',['sala' => $sala]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sala $sala)
    {
        return view('sala_edit', ['sala' => $sala]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSala $request, string $id)
    {
        $updated = $this->sala->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('salas.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('salas.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->sala->where('id',$id)->delete();

       return redirect()->route('salas.index')->with('message','Deletado com sucesso');
    }
}

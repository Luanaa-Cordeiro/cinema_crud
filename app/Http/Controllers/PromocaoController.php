<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promocao;
use Illuminate\Http\Request;
use App\Http\Requests\StorePromocao;

class PromocaoController extends Controller
{

    public readonly Promocao $genero;

    public function __construct() {
        $this->promocao = new Promocao();
    }
    
    public function index()
    {
        $promocoes = $this->promocao->all();
        return view('promocoes', ['promocoes' => $promocoes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promocao_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePromocao $request)
    {
        $created = $this->promocao->create([
            'disponiveis' => $request->input('disponiveis'), 
            'valor_atual' => $request->input('valor_atual'), 
            'valor_promocao' => $request->input('valor_promocao'), 
        ]);

        if($created){
           return redirect()->route('promocoes.index')->with('message', 'Promoção "' . $created->disponiveis  . '" criada com sucesso');
        }

        return redirect()->route('promocoes.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promocao $promocao)
    {
        return view('promocao_show',['promocao' => $promocao]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promocao $promocao)
    {
        return view('promocao_edit', ['promocao' => $promocao]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(StorePromocao $request, string $id)
    {
        $updated = $this->promocao->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('promocoes.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('promocoes.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->promocao->where('id',$id)->delete();

       return redirect()->route('promocoes.index')->with('message','Deletado com sucesso');
    }
}
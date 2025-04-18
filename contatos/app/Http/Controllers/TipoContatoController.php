<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipo_contato;

class TipoContatoController extends Controller
{
    public function create(){
        return view("tipo_contato.create");
    }

    public function edit(int $id){
        $tipo_contato = tipo_contato::findOrFail($id);
        return view("tipo_contato.edit", compact('tipo_contato'));
    }


    public function index(){
        $tipo_contatos = tipo_contato::orderBy('id')->get();

        return view('tipo_contato.index', compact('tipo_contatos'));
    }

    public function show(int $id){
        $tipo_contato = tipo_contato::findOrFail($id);
        return view('tipo_contato.show', compact('tipo_contato'));
    }

    public function store(Request $request){
        $tipo_contato = new tipo_contato;

        $tipo_contato->nome = $request->input('nome');
        $tipo_contato->descricao = $request->input('descricao');

        $tipo_contato->save();

        return $this->index();
    }

    public function update(Request $request, int $id){    
        $tipo_contato = tipo_contato::findOrFail($id);

        $tipo_contato->nome = $request->input('nome');
        $tipo_contato->descricao = $request->input('descricao');

        $tipo_contato->save();

        return $this->index();
    }

    public function destroy(int $id){
        $tipo_contato = tipo_contato::findOrFail($id);

        $tipo_contato->delete();

        return $this->index();
    }
}

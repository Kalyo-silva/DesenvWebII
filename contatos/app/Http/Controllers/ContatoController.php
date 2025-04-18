<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contato;

class ContatoController extends Controller
{
    public function create(){
        return view("contatos.create");
    }

    public function edit(int $id){
        $contato = contato::findOrFail($id);
        return view("contatos.edit", compact('contato'));
    }

    public function index(){
        $contatos = contato::orderBy('id')->get();

        return view('contatos.index', compact('contatos'));
    }

    
    public function show(int $id){
        $contato = contato::findOrFail($id);
        return view('contatos.show', compact('contato'));
    }

    public function store(Request $request){
        $contato = new contato;

        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->cidade = $request->input('cidade');
        $contato->estado = $request->input('estado');

        $contato->save();

        return $this->index();
    }

    public function update(Request $request, int $id){
        $contato = contato::findOrFail($id);

        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->cidade = $request->input('cidade');
        $contato->estado = $request->input('estado');

        $contato->save();

        return $this->index();
    }

    public function destroy(int $id){
        $contato = contato::findOrFail($id);

        $contato->delete();

        return $this->index();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContatoRequest;
use App\Contato;

class ContatoController extends Controller
{
   
    public function list() 
    {
        $contatos = Contato::all();
        return view('agenda.list', ['contatos' => $contatos]);
    }

    public function store(ContatoRequest $request)
    {
        Contato::create($request->all());
        return redirect()->route('list');
    }

    public function edit($id) 
    {
        $contato = Contato::find($id);
        return view('agenda.edit', ['contato' => $contato]);
    }

    public function update(ContatoRequest $request, $id)
    {
        Contato::find($id)->update($request->all());
        return redirect()->route('list');
    }
   
    public function delete($id)
    {
        Contato::find($id)->delete();
        return redirect()->route('list');
    }

}

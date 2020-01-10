<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    
    public function listarTodosOsContatos() {
        return view('contatos')->with('contatos', Contato::all());
    }

}

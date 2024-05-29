<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formsController extends Controller
{
    public function Cadastrar(Request $req)
    {
        $req->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'endereço' => 'required|string|max:255',
            'genero' => 'required|string|in:masculino,feminino',
        ]);

        $nome = $req->input('nome');
        $telefone = $req->input('telefone');
        $endereco = $req->input('endereco');
        $genero = $req->input('genero');
        var_dump($nome, $telefone, $endereco, $genero);
        return view('contato', compact('nome', 'telefone', 'endereco', 'genero'));
        die();
    }
}

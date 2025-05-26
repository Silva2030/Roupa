<?php

namespace App\Http\Controllers;

use App\Models\Colecao;
use Illuminate\Http\Request;

class ColecaoController extends Controller
{
    public function index()
    {
        $colecoes = Colecao::all();
        return response()->json($colecoes);
    }

    public function create()
    {
        // Se usar Blade, exibe formulário
    }

    public function store(Request $request)
    {
        $colecao = Colecao::create($request->all());
        return response()->json($colecao, 201);
    }

    public function show(Colecao $colecao)
    {
        return response()->json($colecao);
    }

    public function edit(Colecao $colecao)
    {
        // Se usar Blade, exibe formulário de edição
    }

    public function update(Request $request, Colecao $colecao)
    {
        $colecao->update($request->all());
        return response()->json($colecao);
    }

    public function destroy(Colecao $colecao)
    {
        $colecao->delete();
        return response()->json(['mensagem' => 'Coleção removida com sucesso']);
    }
}

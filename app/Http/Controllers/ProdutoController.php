<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Listar todos os produtos.
     */
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    /**
     * Mostrar o formulário para criar um novo produto (caso use Blade).
     */
    public function create()
    {
        // Se for API, pode ignorar isso.
    }

    /**
     * Salvar um novo produto no banco.
     */
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201);
    }

    /**
     * Exibir um produto específico.
     */
    public function show(Produto $produto)
    {
        return response()->json($produto);
    }

    /**
     * Mostrar formulário de edição (caso use Blade).
     */
    public function edit(Produto $produto)
    {
        // Se for API, pode ignorar isso.
    }

    /**
     * Atualizar um produto.
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return response()->json($produto);
    }

    /**
     * Deletar um produto.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return response()->json(['mensagem' => 'Produto deletado com sucesso']);
    }
}

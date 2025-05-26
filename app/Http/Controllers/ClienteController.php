<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function create()
    {
        // Se usar Blade, exibe formulário
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return response()->json($cliente, 201);
    }

    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }

    public function edit(Cliente $cliente)
    {
        // Se usar Blade, exibe formulário de edição
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return response()->json($cliente);
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json(['mensagem' => 'Cliente removido com sucesso']);
    }
}

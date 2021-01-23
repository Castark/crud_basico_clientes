<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function create()
    {
    	return view('clientes.create');
    }

    public function store(Request $request)
    {
    	Cliente::create([
    		'nome' => $request->nome,
    		'sobrenome' => $request->sobrenome,
    		'email' => $request->email,
    		'data' => $request->data,
    	]);

    	return "Cliente Criado com Sucesso!";
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', ['cliente' => $cliente]);
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->update([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'data' => $request->data,
        ]);

        return "Cliente Atualizado com Sucesso!";
    }

    public function delete($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.delete', ['cliente' => $cliente]);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return "Cliente excluído com Sucesso";
    }
}

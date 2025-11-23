<?php

namespace App\Http\Controllers;

use App\Models\Transacao;
use App\Models\Categoria;
use Illuminate\Http\Request;

class TransacaoController extends Controller
{
    public function index()
    {
        $transacoes = Transacao::with('categoria')->get();
        $total = $transacoes->sum('valor');
        return view('transacoes.index', compact('transacoes', 'total'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('transacoes.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        Transacao::create($request->only(['descricao', 'valor', 'data', 'categoria_id']));
        return redirect()->route('transacoes.index');
    }

    public function edit(Transacao $transacao)
    {
        $categorias = Categoria::all();
        return view('transacoes.edit', compact('transacao', 'categorias'));
    }

    public function update(Request $request, Transacao $transacao)
    {
        $transacao->update($request->only(['descricao', 'valor', 'data', 'categoria_id']));
        return redirect()->route('transacoes.index');
    }

    public function destroy(Transacao $transacao)
    {
        $transacao->delete();
        return redirect()->route('transacoes.index');
    }
}
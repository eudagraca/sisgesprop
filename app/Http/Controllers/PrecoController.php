<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrecoRequest;
use App\Preco;
use App\Grau;


class PrecoController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $precos = Preco::orderBy('id', 'asc')->get();
        return view('preco.index')->with('precos', $precos);
    }

    public function create()
    {
        return view('preco.create')->with('graus', Grau::all());
    }

    public function store(PrecoRequest $request)
    {
        Preco::create($request->all());
        return redirect('/preco')->with('success', 'Preços de ' . $request->input('grau') . ' cadastrados com sucesso');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('preco.edit',['graus' => Grau::all()])->with('preco', Preco::find($id));
    }

    public function update(PrecoRequest $request, $id)
    {
        Preco::where('id', $id)
            ->update($request->except(['_method', '_token']));
        return redirect('/preco')->with('success', 'Preços de ' . $request->input('grau') . ' actualizados com sucesso');
    }

    public function destroy($id)
    {
        Preco::destroy($id);
        return redirect('/preco')->with('success', 'Preco removido com sucesso ');
    }
}

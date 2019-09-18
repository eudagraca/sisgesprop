<?php

namespace App\Http\Controllers;

use App\Cadeira;
use App\Curso;
use App\Http\Requests\CadeiraRequest;

class CadeiraController extends Controller
{
    public function index()
    {
        return view('cadeiras.index')->with('cadeiras', Cadeira::all());
    }

    public function create()
    {
        return view('cadeiras.create')->with('cursos', Curso::all());
    }

    public function store(CadeiraRequest $request)
    {
        $cadeira = Cadeira::create($request->all());
        $cadeira->curso()->attach($request->get('curso'));
        return redirect('/cadeiras')->with('success', 'Cadeira ' . $request->input('nome') . ' registada com sucesso');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('cadeiras.edit', array('cursos' => Curso::all()))->with('cadeira', Cadeira::find($id));
    }

    public function update(CadeiraRequest $request, $id)
    {
        $cadeira = Cadeira::find($id);
        $cadeira->save();
        $cadeira->curso()->sync($request->get('curso'));

        return redirect('/cadeiras')->with('success', 'Cadeira ' . $request->input('nome') . ' alterada com sucesso');
    }

    public function destroy($id)
    {
        // Apagando as cadeiras
        $cadeira = Cadeira::find($id);
        Cadeira::destroy($id);
        $cadeira->curso()->sync([]);
        return redirect('/cadeiras')->with('success', 'Cadeira ' . $cadeira->nome . ' removida com sucesso');
    }
}

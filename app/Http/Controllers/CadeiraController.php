<?php

namespace App\Http\Controllers;

use App\Cadeira;
use App\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\CadeiraRequest;

class CadeiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadeiras.index')->with('cadeiras', Cadeira::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadeiras.create')->with('cursos', Curso::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CadeiraRequest $request)
    {
        $cadeiras = new Cadeira();
        $cadeiras->nome = $request->input('nome');
        $cadeiras->codigo = $request->input('codigo');
        $cadeiras->creditos = $request->input('creditos');
        $cadeiras->ano = $request->input('ano');
        $cadeiras->semestre = $request->input('semestre');

        // Contador
        $contador = 1;
        foreach ($request->input('curso') as $curso) {
            $cadeiras->curso .= $curso;
            if ($contador < count($request->input('curso'))) {
                $cadeiras->curso .= ', ';
            }
            $contador++;
        }
        $cadeiras->save();
        return redirect('/cadeiras')->with('success', 'Cadastrado com sucesso' . $request->input('nome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cadeiras.edit', array('cursos' => Curso::all()))->with('cadeira', Cadeira::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CadeiraRequest $request, $id)
    {
        $cadeira = Cadeira::find($id);
        $cadeira->nome = $request->input('nome');
        $cadeira->codigo = $request->input('codigo');
        $cadeira->creditos = $request->input('creditos');
        $cadeira->ano = $request->input('ano');
        $cadeira->semestre = $request->input('semestre');

        $cursos = "";
        $counter = 1;
        foreach ($request->input('curso') as $curso) {
            $cursos .= $curso;
            if ($counter < count($request->input('curso'))) {
                $cursos .= ',';
            }
            $counter++;
        }
        $cadeira->curso = $cursos;
        $cadeira->save();
        return redirect('/cadeiras')->with('success', 'Alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Apagando as cadeiras
        $nomeCadeira = Cadeira::find($id);
        Cadeira::destroy($id);

        return redirect('/cadeiras')->with('success', 'Cadeira ' . $nomeCadeira->nome . ' removido com sucesso');

    }
}

<?php

namespace App\Http\Controllers;

use App\Cadeira;
use App\Curso;
use App\Http\Requests\CadeiraRequest;
use App\Matricula;
use DB;
use Illuminate\Http\Request;

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

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $matriculaID = $request->get('matriculaID');

        $matricula = Matricula::find($matriculaID);
        if (empty($matricula)) {
            return redirect('/matricula');
        }

        $cadeiras = DB::select("SELECT cadeira_id FROM cadeira_curso WHERE curso_id = $matricula->curso_id");
        $cadeirasArr = array();

        foreach ($cadeiras as $cadeira) {
            $query = Cadeira::where('id', '=', $cadeira->cadeira_id)->where($select, '=', $value)->orderBy('nome', 'asc')->get();
            foreach ($query as $cadeiraEspecifica) {
                if ($matricula->ano_escolaridade >= $cadeiraEspecifica->ano) {
                    array_push($cadeirasArr, $cadeiraEspecifica);
                }
            }
        }

        $finalData = "";
        $i =0;
        foreach ($cadeirasArr as $umaCadeira) {
            $finalData.= '<option value="'.$umaCadeira['id'].'">'.$umaCadeira['nome'].'</option>';
        }
        echo $finalData;
    }
}

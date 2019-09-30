<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Estudante;
use App\Http\Requests\MatriculaRequest;
use App\Matricula;
use App\Preco;
use App\Grau;
use Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $matriculas = Matricula::orderBy('id', 'asc')->paginate(10);
        return view('matricula.index')->with('matriculas', $matriculas);
    }

    public function create()
    {
        //return view('matricula.create')->with('estudantes', Estudante::orderBy('name', 'asc')->get());
    }

    public function store(MatriculaRequest $request)
    {
        $ID = $request->estudante_id;
        $ano = $request->ano;
        $ano = substr($ano, 0, 4);
        $preco = new PrecoController;

        $query = Matricula::where('estudante_id', $ID)->where('ano', $ano)->get();

        if (sizeof($query) == 0) {
            Matricula::create($request->all());
            return redirect('/matricula')->with('success', 'Estudante matriculado');
        } else {
            return redirect('/matricula')->with('error', 'Estudante já esta matriculado');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function matricular($id)
    {
        $estudante = Estudante::find($id);
        $precoMatricula = 0;
        $precos = Preco::all();

        foreach ($precos as $preco) {
            if ($preco->grau_id == $estudante->grau_id) {
                $precoMatricula = $preco->preco_matricula;
            }
        }
        if($precoMatricula<=0){
            return redirect('/preco/create');
        }else if (!empty($estudante)) {
            return view('estudantes.matricular', ['preco' => $precoMatricula, 'graus' => Grau::all()])->with('estudante', $estudante);
        } else {
            return redirect('/estudante');
        }

    }

    public function naoMatriculados()
    {
        $name = '';
        $naoMatriculados = Estudante::where('name', 'like', '%' . $name . '%')->leftJoin('matriculas',
            'estudantes.id', '=', 'matriculas.estudante_id')
            ->join('cursos', 'cursos.id', '=', 'estudantes.curso_id')
            ->whereNull('matriculas.estudante_id')->select('estudantes.id',
            'estudantes.name','estudantes.last_name','estudantes.nr_bi','estudantes.email','estudantes.telefone_principal','estudantes.telefone_alternativo','estudantes.local_emissao_bi','estudantes.data_emissao_bi','estudantes.data_validade_bi','estudantes.data_nascimento','estudantes.naturalidade','estudantes.sexo','estudantes.estado_civil','estudantes.ocupacao','estudantes.morada','estudantes.morada_localidade','estudantes.morada_pais','estudantes.qualificacao_previa','estudantes.instituicao_ensino_medio','estudantes.data_conclusao','estudantes.localidade_morada_educacao','estudantes.pais_estudo','estudantes.curso_id','estudantes.codigo_postal', 'cursos.nome', 'cursos.grau_id','cursos.duracao','cursos.codigo','cursos.preco'

            )->get()->toArray();

        return view('matricula.naoMatriculados')->with('naoMatriculados', $naoMatriculados);
    }
}

<?php

namespace App\Http\Controllers;
use App\Curso;
use App\Cadeira;
use Illuminate\Http\Request;
use App\Grau;

use App\Http\Requests\CursoRequest;

class CursosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cursos = Curso::orderBy('nome', 'asc')->paginate(10);
        return view('cursos.index')->with('cursos', $cursos);
    }

    public function create()
    {
        return view('cursos.create')->with('graus', Grau::all());
    }

    public function store(CursoRequest $request)
    {
        Curso::create($request->all());
        return redirect('/cursos')->with('success', 'Cadastrou o curso de ' . $request->input('nome'));
    }

    public function show($id)
    {
        $cursos = Curso::find($id);

        return view('cursos.details', array('cadeiras' => $cursos->cadeiras))->with('curso', $cursos);
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('cursos.edit', ['graus' => Grau::all()])->with('curso', $curso);
    }

    public function update(CursoRequest $request, $id)
    {
        Curso::where('id', $id)
            ->update($request->except(['_method', '_token']));
        return redirect('/cursos')->with('success', 'Curso ' . $request->input('nome') . ' actualizado com sucesso');
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        Curso::destroy($id);
        $curso->cadeiras()->sync([]);
        return redirect('/cursos')->with('success', 'Curso ' . $curso->nome . ' removido com sucesso');
    }

    public function cursoGrau(Request $request)
    {
        $curso = Curso::find($request->get('value'));

        echo '<option value="'.$curso->grau_id.'">
                                        '.$curso->grau->grau.'</option>
                                    ';


    }
}

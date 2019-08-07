<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use Illuminate\Support\Facades\Auth;
use App\Cadeira;

class CursosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos =    Curso::orderBy('nome', 'asc')->get();
        return view('cursos.index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar os campos
        $this->validate($request, [
            'nome'      => 'required|string|max:191',
            'codigo'    => 'required|string',
            'grau'      => 'required|string',
            'preco'     => 'required',
            'duracao'   => 'required',
            'credito'   => 'required',
        ]);

        Curso::create($request->all());

        return redirect('/cursos')->with('success', 'Cadastrou o curso de '.$request->input('nome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadeiras = Cadeira::all();
        $cadeirasArr = array();
        foreach ($cadeiras as $cadeira) {
            $curArr = explode(',', $cadeira->curso);
            if (in_array($id ,$curArr)) {
                array_push($cadeirasArr, $cadeira);
            }
           
        }
        
        return view('cursos.details', array('cadeiras' => $cadeirasArr))->with('curso', Curso::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('cursos.edit')->with('curso', $curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Validar os campos
         $this->validate($request, [
            'nome'      => 'required|string',
            'codigo'    => 'required|string',
            'grau'      => 'required|string',
            'preco'     => 'required',
            'duracao'   => 'required',
            'credito'   => 'required',
        ]);

        Curso::where('id', $id)
        ->update($request->except(['_method','_token']));

        return redirect('/cursos')->with('success', 'Curso '. $request->input('nome').' actualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nomeCurso = Curso::find($id);
        Curso::destroy($id);

        return redirect('/cursos')->with('success', 'Curso '.$nomeCurso->nome.' removido com sucesso');
    }
}

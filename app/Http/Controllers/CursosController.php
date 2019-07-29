<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use Illuminate\Support\Facades\Auth;

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
        $cursos = Curso::orderBy('id', 'desc')->paginate(10);
        return view('cursos.index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $curso = new Curso;
        $curso->nome = $request->input('nome');
        $curso->codigo = $request->input('codigo');
        $curso->grau = $request->input('grau');
        $curso->preco = $request->input('preco');
        $curso->duracao = $request->input('duracao');
        $curso->credito = $request->input('credito');
        $curso->save();

        return redirect('/cursos')->with('success', 'Cadastrou o curso de '.$curso->nome);
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
        //
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

        $curso = Curso::find($id);
        $curso->nome = $request->input('nome');
        $curso->codigo = $request->input('codigo');
        $curso->grau = $request->input('grau');
        $curso->preco = $request->input('preco');
        $curso->duracao = $request->input('duracao');
        $curso->credito = $request->input('credito');
        $curso->save();

        return redirect('/cursos')->with('success', 'Curso '.$curso->nome.' actualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $nomeCurso = Curso::find($id);
        Curso::destroy($id);

        return redirect('/cursos')->with('success', 'Curso '.$nomeCurso->nome.' removido com sucesso');
    }
}

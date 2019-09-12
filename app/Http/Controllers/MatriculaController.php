<?php

namespace App\Http\Controllers;

use Request;
use App\Estudante;
use App\Matricula;
use App\Curso;
use App\Preco;
use DB;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $matriculas = Matricula::orderBy('id', 'asc')->get();
        return view('matricula.index')->with('matriculas', $matriculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('matricula.create')->with('estudantes', Estudante::orderBy('name', 'asc')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ID = $request::input('estudante_id');
        $ano = $request::input('ano');

        $query = Matricula::where('estudante_id', $ID)->where('ano', $ano)->get();
        
        if(sizeof($query) == 0){
            Matricula::create($request::all());
            return redirect('/matricula')->with('success', 'Estudante matriculado');   
        }else {
            return redirect('/matricula')->with('error', 'Estudante já esta matriculado');
        }

        /*
        if(!empty($query)){
          
            return redirect('/matricula')->with('error', 'Estudante já esta matriculado');
        }else {
            Matricula::create($request::all());
            return redirect('/matricula')->with('success', 'Estudante matriculado');   
        }
        */
       
   
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
        //
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
    }

    public function matricular($id){

        $precos = Preco::all();
        $estudante = Estudante::find($id);
        if (!empty($estudante)) {
            return view('estudantes.matricular', array('precos' => $precos))->with('estudante', $estudante);
        }else{
            return redirect('/estudante');
        }
        
    }

    public function naoMatriculados(){
        
        //$matriculas = Estudante::join('matriculas', 'estudantes.id', '!=', 'matriculas.estudante_id')->get();
        $matriculas = DB::select("SELECT * FROM estudantes left outer join matriculas on matriculas.estudante_id = estudantes.id WHERE matriculas.estudante_id IS NULL");

        //$resultado = array();
        /*foreach ($matriculas as $matricula) {
            $resultado.array_push(json_decode($matricula, false));
        }*/
        return $matriculas[0];
        return view('matricula.naoMatriculados')->with('matriculas', $matricula);
    }
}

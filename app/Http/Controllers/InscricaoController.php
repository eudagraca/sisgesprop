<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Matricula;
use App\Estudante;
use App\Cadeira;
use App\Curso;


class InscricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
       /* $search = $request->input('search');
        $estudantes = DB::table('estudantes')->where('name', 'like', '%'.$search.'%')->orWhere('last_name', 'like', '%'.$search . '%')->paginate(10);

        $estudantesArr = array();
        $ano = date('Y');
        foreach ($estudantes as $estudante) {
            
            $query = Matricula::where('estudante_id', $estudante->id)->where('ano', $ano)->get();
            array_push($estudantesArr, $query);
        }

        return $estudantesArr;
        if(sizeof($estudantes) == 0){
            return redirect('/inscricao')->with('error', 'Nenhum dado encontrado');
        }else
        return view('inscricao.index', ['estudantes' => $estudantes]);*/

        //return view('inscricao.index')->with('inscritos', Inscricao::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

   /* public function search(Request $request){
        $search = $request->input('search');
        $estudantes = DB::table('estudantes')->where('name', 'like', '%'.$search.'%')->paginate(1);
        return view('inscricao.index', ['estudantes' => $estudantes]);
    }*/

    public function inscrever($id){

        $matricula = Matricula::find($id);
        if(empty($matricula)){
            return redirect('/matricula');
        }

       $cadeiras = DB::select("SELECT cadeira_id FROM cadeira_curso WHERE curso_id = $matricula->curso_id");
            
        $cadeirasArr = array();
        foreach ($cadeiras as $cadeira) {
            
           $query = Cadeira::find($cadeira->cadeira_id);
            if($matricula->ano_escolaridade >= $query->ano){
                array_push($cadeirasArr, $query);
            }
        }


        return view('inscricao.inscrever',['estudante' => Estudante::find($matricula->estudante_id),'curso' => Curso::find($matricula->curso_id),'matricula' => $matricula])->with('cadeiras', $cadeirasArr);
        
    }
}
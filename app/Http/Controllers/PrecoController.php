<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preco;
class PrecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $precos = Preco::orderBy('id', 'asc')->get();
        return view('preco.index')->with('precos', $precos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('preco.create');
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
        //Validar os campos
        $this->validate($request, [
            'preco_matricula' => 'required',
            'preco_inscricao' => 'required',
            'grau'            => 'required',
        ]);
        
        Preco::create($request->all());

        return redirect('/preco')->with('success', 'Cadastrado com sucesso');
    
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

        return view('preco.edit')->with('preco', Preco::find($id));
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
          //Validar os campos
          $this->validate($request, [
            'preco_matricula' => 'required',
            'preco_inscricao' => 'required',
            'grau'      => 'required',
           
        ]);

        Preco::where('id', $id)
        ->update($request->except(['_method','_token']));

        return redirect('/preco')->with('success', 'Preco actualizado com sucesso');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Preco::destroy($id);

        return redirect('/preco')->with('success', 'Preco removido com sucesso ');
    
    }
}

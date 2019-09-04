<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Estudante;
use \Storage;
use DataTables;
use Illuminate\Http\Request;



class EstudanteController extends Controller
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
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Estudante::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('estudantes.index');


        // return view('estudantes.index')->with('estudantes', Estudante::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countriesPath = Storage::disk('local')->get('countries.json');
        $bigArrayCountries = json_decode($countriesPath);

        $path = Storage::disk('local')->get('nationalities.json');
        $nationalities = json_decode($path, true);

        return view('estudantes.create', array('bigArrayCountries' => $bigArrayCountries,
            'nationalities' => $nationalities, 'cursos' => Curso::all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estudante::create($request::all());
        return redirect('/estudante')->with('success', 'Registou novo estudante');
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
        $countriesPath = Storage::disk('local')->get('countries.json');
        $bigArrayCountries = json_decode($countriesPath);

        $path = Storage::disk('local')->get('nationalities.json');
        $nationalities = json_decode($path, true);

        $estado_civil = ['solteiro', 'casado', 'outro'];

        return view('estudantes.edit', array('bigArrayCountries' => $bigArrayCountries,
            'nationalities' => $nationalities, 'estado_civil' => $estado_civil, 'cursos' => Curso::all()))->with('estudante', Estudante::find($id));
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
        Estudante::where('id', $id)
            ->update(Request::except(['_method', '_token']));

        return redirect('/estudante')->with('success', 'Dados do estudante ' . Request::input('name') . ' actualizados');
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
}

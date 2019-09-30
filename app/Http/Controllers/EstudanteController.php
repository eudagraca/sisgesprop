<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Estudante;
use App\Grau;
use App\Http\Requests\EstudanteRequest;
use DataTables;
use Illuminate\Http\Request;
use \Storage;

class EstudanteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Estudante::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="matricular/' . $row->id . '" class="small ui button">
                     Matricular</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('estudantes.index');
    }

    public function create()
    {
        $countriesPath = Storage::disk('local')->get('countries.json');
        $bigArrayCountries = json_decode($countriesPath);

        $path = Storage::disk('local')->get('nationalities.json');
        $nationalities = json_decode($path, true);

        return view('estudantes.create', array('bigArrayCountries' => $bigArrayCountries,
            'nationalities' => $nationalities, 'cursos' => Curso::all(), 'graus' => Grau::all()));
    }

    public function store(EstudanteRequest $request)
    {
        Estudante::create($request->all());
        return redirect('/estudante')->with('success', 'Registou novo estudante');
    }

    public function show($id)
    {
        return view('estudantes.perfil')->with('estudante', Estudante::find($id));
    }

    public function edit($id)
    {
        $countriesPath = Storage::disk('local')->get('countries.json');
        $bigArrayCountries = json_decode($countriesPath);

        $path = Storage::disk('local')->get('nationalities.json');
        $nationalities = json_decode($path, true);

        $estado_civil = ['solteiro', 'casado', 'outro'];

        return view('estudantes.edit', array('bigArrayCountries' => $bigArrayCountries,
            'nationalities' => $nationalities, 'estado_civil' => $estado_civil, 'cursos' => Curso::all(), 'graus' => Grau::all()))->with('estudante', Estudante::find($id));
    }

    public function update(EstudanteRequest $request, $id)
    {
        Estudante::where('id', $id)
            ->update(Request::except(['_method', '_token']));

        return redirect('/estudante')->with('success', 'Dados do estudante ' . Request::input('name') . ' actualizados');
    }

    public function destroy($id)
    {
        //
    }

}

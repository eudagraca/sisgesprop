<?php

namespace App\Http\Controllers;

use App\Curso;
use PDF;
class ReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cursosPdf()
    {
        $cursos = Curso::all();

        $pdf = PDF::loadView('layouts.pdf', compact('cursos'));

        return $pdf->download('cursos.pdf');

    }
}

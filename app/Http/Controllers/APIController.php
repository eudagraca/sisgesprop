<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudante;

class APIController extends Controller
{

    public function getAllStudents() {
        $students = Estudante::all();
        return response($students, 200);
    }

}

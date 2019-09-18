<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class LiveSerachController extends Controller
{
    public function index()
    {
        //
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('estudantes')
                    ->where('name', 'like', '%' . $query . '%')
                    ->orWhere('last_name', 'like', '%'.$query . '%')
                    ->leftJoin('matriculas',
                        'estudantes.id', '=', 'matriculas.estudante_id')
                    ->join('cursos', 'cursos.id', '=', 'estudantes.curso_id')
                    ->whereNull('matriculas.estudante_id')->get();

            } else {
                $data = DB::table('estudantes')
                    ->leftJoin('matriculas',
                        'estudantes.id', '=', 'matriculas.estudante_id')
                    ->join('cursos', 'cursos.id', '=', 'estudantes.curso_id')
                    ->whereNull('matriculas.estudante_id')->get();

            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
        <tr>
         <td>' . $row['name'] . '</td>
         <td>' . $row['last_name'] . '</td>
         <td>' . $row['nome'] . '</td>
         <td>' . $row['telefone_principal']. '</td>
         <td>' . $row['morada'] . '</td>
         <a href="matricular/' . $row['id'] . '" class="ui labeled icon button"><i class="eye icon"></i> View</a>

        </tr>
        ';
                }
            } else {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row,
            );

            echo json_encode($data);
        }
    }

}

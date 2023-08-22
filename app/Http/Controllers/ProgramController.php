<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function getProgram(){
        $programs = Program::all();
        return response()->json($programs, 200);
    }

    public function searchProgram(Request $request){
        // $program = Program::query();

        // var_dump($q);
        // die();

        
        $data = $request->input('search_program');
    
            
            $program = Program::Select('programs.title','programs.code','programs.about','programs.duration','intakes.intake')
            ->whereRaw("title LIKE '%" .$data.  "%'")
            ->orwhereRaw("code LIKE '%" .$data.  "%'")
            ->Join('intakes', 'intakes.program_id', '=','programs.id');

     

           
         
        
    

        return response()->json($program->get());
    }


    
}

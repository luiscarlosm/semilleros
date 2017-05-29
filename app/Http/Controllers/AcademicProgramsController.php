<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicProgram;

class AcademicProgramsController extends Controller
{
    //
    public function listAcademicPrograms() {

    	$academicPrograms = AcademicProgram::all();

	    return view('academic_programs.index', [
	    	'academicPrograms' => $academicPrograms,
		  ]);

    }
}

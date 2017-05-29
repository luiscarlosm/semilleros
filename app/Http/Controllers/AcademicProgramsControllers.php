<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicProgramsControllers extends Controller
{
    //
    public function listAcademicPrograms() {

    	$academicPrograms = AcademicPrograms::all();

	    return view('welcome', [
	    	'academicPrograms' => $academicPrograms,
		  ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAcademicProgramRequest;
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
        public function create(CreateAcademicProgramRequest $request)
        {
          $academic_programs = AcademicProgram::create([
              'name' => $request->input('name'),
              'faculties_id' => $request -> input('faculties_id'),

          ]);

          return redirect('/academic_programs/'.$academic_programs->name);
        }

        public function newAcademicProgram()
        {
          return view('academic_programs.new', []);
        }

        public function show(Academic_Program $academicProgram)
        {
          return view('academic_programsPrograms.show', [
            'academicProgram' => $academicProgram,
          ]);
      }
      //
    }

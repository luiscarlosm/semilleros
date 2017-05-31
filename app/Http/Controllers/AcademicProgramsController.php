<?php

namespace App\Http\Controllers;



use App\AcademicProgram;
use App\Http\Requests\CreateAcademicProgramsRequest;
use Illuminate\Http\Request;



class AcademicProgramsController extends Controller
{
    //
    public function listAcademicPrograms() {

    	$academicPrograms = AcademicProgram::all();

	    return view('academic_programs.index', [
	    	'academicPrograms' => $academicPrograms,
		  ]);

    }
        public function create(CreateAcademicProgramsRequest $request)
        {
          $academic_programs = AcademicProgram::create([
              'name' => $request->input('name'),
              'faculties_id' => $request -> input('faculties_id')

          ]);

          return redirect('/academic_programs/'.$academic_programs->name);
        }

        public function newAcademicProgram()
        {
          return view('academic_programs.new', []);
        }

        public function show(AcademicProgram $academicProgram)
        {
          return view('academic_programs.show', [
            'academicProgram' => $academicProgram,
          ]);
      }
      //
    }

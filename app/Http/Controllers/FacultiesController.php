<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Http\Requests\CreateFacultyRequest;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
  public function listFalcuties() {

    $faculties = Faculty::all();

    return view('faculties.index', [
      'faculties' => $faculties,
    ]);

}
    public function create(CreateFacultyRequest $request)
    {
      $faculty = Faculty::create([
          'name' => $request->input('name'),
          'sectionals_id' => $request -> input('sectionals_id'),

      ]);

      return redirect('/faculties/'.$faculty->id);
    }

    public function newFaculty()
    {
      return view('faculties.new', []);
    }

    public function show(Faculty $faculty)
    {
      return view('faculties.show', [
        'faculty' => $faculty,
      ]);
  }
  //
}

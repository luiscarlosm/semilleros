<?php

namespace App\Http\Controllers;
use App\Faculty;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
  public function listFalcuties() {

    $faculties = Faculty::all();

    return view('faculties.index', [
      'faculties' => $faculties,
    ]);

}
    public function create(CreateFacultiesRequest $request)
    {
      $sectional = Faculty::create([
          'name' => $request->input('name'),
      ]);

      return redirect('/faculties/'.$faculty->id);
    }

    public function newFalculty()
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

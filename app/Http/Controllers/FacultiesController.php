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
  //
}

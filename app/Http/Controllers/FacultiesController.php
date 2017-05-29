<?php

namespace App\Http\Controllers;
use App\Faculty;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
  public function listFalcuties() {

    $falcuties = Faculty::all();

    return view('welcome', [
      'faculties' => $faculties,
    ]);

  }
  //
}

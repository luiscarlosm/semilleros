<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchCentersController extends Controller
{
  public function listResearchCenters() {

    $researchCenters = ResearchCenters::all();

    return view('welcome', [
      'researchCenters' => $researchCenters,
    ]);

  }

}

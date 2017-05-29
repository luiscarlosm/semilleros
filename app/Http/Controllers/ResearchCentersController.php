<?php

namespace App\Http\Controllers;

use App\ResearchCenter;
use Illuminate\Http\Request;

class ResearchCentersController extends Controller
{
  public function listResearchCenters() {

    $researchCenters = ResearchCenter::all();

    return view('research_centers.index', [
      'researchCenters' => $researchCenters,
    ]);

  }
  public function newResearchCenters()
{
  return view('research_centers.new', []);
}

}

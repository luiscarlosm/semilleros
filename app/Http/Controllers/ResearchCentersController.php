<?php

namespace App\Http\Controllers;

use App\ResearchCenter;
use App\Http\Requests\CreateResearchCentersRequest;
use Illuminate\Http\Request;

class ResearchCentersController extends Controller
{
  public function listResearchCenters() {

    $researchCenters = ResearchCenter::all();

    return view('research_centers.index', [
      'researchCenters' => $researchCenters,
    ]);

  }
  public function create(CreateResearchCentersRequest $request)
  {
    $research_centers = ResearchCenter::create([
        'name' => $request->input('name'),
        'init_date' => $request->input('init_date'),
        'observation' => $request->input('observation'),
        'groups_id' => $request->input('groups_id'),
    ]);

    return redirect('/research_centers/'.$research_centers->name);
  }

  public function newResearchCenters()
{
  return view('research_centers.new', []);
}

}

<?php

namespace App\Http\Controllers;

use App\Sectional;
use App\Http\Requests\CreateSectionalRequest;
use Illuminate\Http\Request;

class SectionalsController extends Controller {

    public function listSectionals() {

    	$sectionals = Sectional::all();

	    return view('sectionals.index', [
	    	'sectionals' => $sectionals,
		  ]);

    }

    public function create(CreateSectionalRequest $request)
    {
      $sectional = Sectional::create([
          'name' => $request->input('name'),
      ]);

      return redirect('/sectionals/'.$sectional->id);
    }

    public function newSectional()
    {
      return view('sectionals.new', []);
    }

    public function show(Sectional $sectional)
    {
    	return view('sectionals.show', [
    		'sectional' => $sectional,
    	]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Sectional;
use Illuminate\Http\Request;

class SectionalsController extends Controller {

    public function listSectionals() {

    	$sectionals = Sectional::all();

	    return view('welcome', [
	    	'sectionals' => $sectionals,
		  ]);

    }
}

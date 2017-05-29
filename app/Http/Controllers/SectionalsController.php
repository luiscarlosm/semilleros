<?php

namespace App\Http\Controllers;

use App\Sectional;
use Illuminate\Http\Request;

class SectionalsController extends Controller {

    public function listSectionals() {

    	$sectionals = Sectional::all();

	    return view('sectionals.index', [
	    	'sectionals' => $sectionals,
		  ]);

    }

    public function create() {
      return 'Hola';
    }

    // public function show() {
    //   return 'fuck';
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{    //
	public function listMembers() {

    	$members = Member::all();

	    return view('welcome', [
	    	'members' => $members,
		  ]);

    }
}

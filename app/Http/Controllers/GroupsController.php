<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller {

    public function listGroups() {

    	$groups = Group::all();

	    return view('welcome', [
	    	'groups' => $groups,
		  ]);


    // public function show() {
    //   return 'fuck';
    // }
}

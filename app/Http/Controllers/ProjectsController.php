<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function listProjects() {

    	$projects = Project::all();

	    return view('projects.index', [
	    	'projects' => $projects,
		  ]);

    }

    public function create() {
      return 'Hola';
    }

    // public function show() {
    //   return 'fuck';
    // }
}

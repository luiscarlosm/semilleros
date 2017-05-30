<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests\CreateProjectRequest;
use Illuminate\Http\Request;



class ProjectsController extends Controller
{
    public function listProjects() {

    	$projects = Project::all();

	    return view('projects.index', [
	    	'projects' => $projects,
		  ]);

    }

    public function newProject()
    {
      return view('projects.new', []);
    }

    public function create(CreateProjectRequest $request)
    {
      $project = Project::create([
          'name' => $request->input('name'),
          'init_date' => $request->input('init_date'),
          'observation' => $request->input('observation'),
          'type_project' => $request->input('type_project'),
          'research_centers_id' => $request->input('research_centers_id'),
      ]);

      return redirect('projects/'.$project->id);
    }
    // public function show() {
    //   return 'fuck';
    // }
}

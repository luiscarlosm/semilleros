<?php
namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\CreateGroupRequest;
use Illuminate\Http\Request;

class GroupsController extends Controller {

    public function listGroups() {

    	$groups = Group::all();

	    return view('groups.index', [
	    	'groups' => $groups,
		  ]);

}
    public function create(CreateGroupRequest $request)
    {
      $group = Group::create([
          'name' => $request->input('name'),
          'investigation_type' => $request->input('investigation_type'),
          'academic_programs_id' => $request -> input('academic_programs_id'),

      ]);

      return redirect('/groups/'.$Group->id);
    }

    public function newGroup()
    {
      return view('groups.new', []);
    }

    public function show(Group $group)
    {
      return view('groups.show', [
        'group' => $group,
      ]);
  }
  //
}

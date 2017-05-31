<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateMembersRequest;
use Illuminate\Http\Request;

class MembersController extends Controller
{

	public function listMembers() {

		$members = Member::all();

		return view('members.index', [
			'members' => $members,
		]);

	}

	public function create(CreateMembersRequest $request)
	{
		$user = Auth::user();
		$id = Auth::id();
		$member = Member::create([
				'names' => $request->input('names'),
				'lastnames' => $request->input('lastnames'),
				'email' => $request->input('email'),
				'movil' => $request->input('movil'),
				'type' => $request->input('type'),
				'doc_type' => $request->input('doc_type'),
				'projects_id' => $request->input('projects_id'),
				'academic_programs_id' => $request->input('academic_programs_id'),
				'users_id' => $id,
		]);
		return $id;
		// return redirect('/members/'.$member->id);
	}

	public function newMember()
	{
		return view('members.new', []);
	}

	public function show(Member $member)
	{
		return view('members.show', [
			'member' => $member,
		]);
	}


}

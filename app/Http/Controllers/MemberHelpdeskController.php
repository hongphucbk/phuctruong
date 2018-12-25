<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\HelpdeskActivity;
use App\Role;
use App\HelpdeskCategory;
use App\HelpdeskQuestion;

class MemberHelpdeskController extends Controller
{

	public function get_List()
	{
		$tickets = HelpdeskActivity::all();
		$category = HelpdeskCategory::all();
		//$user_group = UserGroup::all();
		return view('member.apps.helpdesk.list', compact('tickets','category'));
	}

	public function post_Add(Request $request)
	{
		$this->validate($request,[
            'brief' => 'required',
        ],
        [
            'brief.required'=>'Please input subject name',
        ]);

		$ticket = new HelpdeskQuestion;
		$ticket->brief = $request->brief;
		$ticket->helpdesk_category_id = $request->category;
		$ticket->content = $request->content;
		$ticket->user_id = Auth::user()->id;
		$ticket->save();

		$helpdesk_question_id = HelpdeskQuestion::orderBy('id','desc')->first()->id;
		$ticket = new HelpdeskActivity;
		$ticket->helpdesk_question_id = $helpdesk_question_id;
		$ticket->status = 10;
		$ticket->save();
		return redirect()->back()->with('notification','Add successfully');
	}

	public function get_Edit_Admin($id)
	{
		$role = Role::find($id);
		return view('admin.role.edit',compact('role'));
	}

	public function post_Edit_Admin($id, Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Please input your role',
        ]);

		$role = Role::find($id);
		$role->name = $request->name;
		$role->note = $request->note;
		$role->save();
		return redirect()->back()->with('notification','Edit successfully');
	}
	

	public function get_Delete_Admin($id)
	{
		//Step 1: Delete all role belongTo this group

		//Step 2: Delete all Role in UserRole belongTo this group

		//Step 3: Delete
		$role = Role::find($id);
		$role->delete();
		return redirect()->back()->with('notification','Deleted successfully');
	}
}

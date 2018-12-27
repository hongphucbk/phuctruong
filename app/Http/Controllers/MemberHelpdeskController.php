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
		$tickets = HelpdeskActivity::where('id',Auth::user()->id)->get();
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

		$helpdesk_question_id 

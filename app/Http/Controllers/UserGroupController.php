<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserGroup;

class UserGroupController extends Controller
{
    public function get_List_Admin()
	{
		$user_group = UserGroup::all();
		return view('admin.user_group.list', compact('user_group'));
	}

	public function get_Add_Admin()
	{
		return view('admin.user_group.add');
	}

	public function post_Add_Admin(Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Bạn chưa nhập tên group',
        ]);

		$user_group = new UserGroup;
		$user_group->name = $request->name;
		$user_group->note = $request->note;
		$user_group->save();
		return redirect()->back()->with('notification','Add successfully');
	}
}

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

	public function get_Edit_Admin($id)
	{
		$user_group = UserGroup::find($id);
		return view('admin.user_group.edit',compact('user_group'));
	}

	public function post_Edit_Admin($id, Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Bạn chưa nhập tên group',
        ]);

		$user_group = UserGroup::find($id);
		$user_group->name = $request->name;
		$user_group->note = $request->note;
		$user_group->save();
		return redirect()->back()->with('notification','Edit successfully');
	}
	

	public function get_Delete_Admin($id)
	{
		//Step 1: Delete all user belongTo this group

		//Step 2: Delete all Role in UserRole belongTo this group

		//Step 3: Delete this group
		$user_group = UserGroup::find($id);
		$user_group->delete();
		return redirect()->back()->with('notification','Deleted successfully');
	}
}

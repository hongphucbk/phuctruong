<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserGroup;
use App\Role;
use App\UserRole;

class UserRoleController extends Controller
{
    public function get_List_Admin()
	{
		$user_role = UserRole::all();
		return view('admin.user_role.list', compact('user_role'));
	}

	public function get_Add_Admin()
	{
		$roles = Role::all();
		$user_group = UserGroup::all();
		return view('admin.user_role.add', compact('roles','user_group'));
	}

	public function post_Add_Admin(Request $request)
	{
		$this->validate($request,[
            'role_id' => 'required',
            'users_group_id' => 'required',
        ],
        [
            'role_id.required'=>'Please select role',
            'users_group_id.required'=>'Please select group',
        ]);

		$user_role = new UserRole;
		$user_role->role_id = $request->role_id;
		$user_role->users_group_id = $request->users_group_id;
		$user_role->note = $request->note;
		$user_role->save();
		return redirect()->back()->with('notification','Add successfully');
	}

	public function get_Edit_Admin($id)
	{
		$roles = Role::all();
		$user_group = UserGroup::all();
		$user_role = UserRole::find($id);
		return view('admin.user_role.edit',compact('user_role','roles','user_group'));
	}

	public function post_Edit_Admin($id, Request $request)
	{
		$this->validate($request,[
            'role_id' => 'required',
            'users_group_id' => 'required',
        ],
        [
            'role_id.required'=>'Please select role',
            'users_group_id.required'=>'Please select group',
        ]);

		$user_role = UserRole::find($id);
		$user_role->role_id = $request->role_id;
		$user_role->users_group_id = $request->users_group_id;
		$user_role->note = $request->note;
		$user_role->save();

		return redirect()->back()->with('notification','Edit successfully');
	}
	

	public function get_Delete_Admin($id)
	{
		//Step 1: Delete all user belongTo this group

		//Step 2: Delete all Role in UserRole belongTo this group

		//Step 3: Delete this group
		$user_role = UserRole::find($id);
		$user_role->delete();
		return redirect()->back()->with('notification','Deleted successfully');
	}
}

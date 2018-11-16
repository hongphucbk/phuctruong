<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\UserGroup;

class UserController extends Controller
{
	public function get_Login_Admin()
	{
		return view('admin.login.login');
	}

	public function post_Login_Admin(Request $request)
	{
		$this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ],
        [
            'email.required'=>'Please input username',
            'password.required'=>'Bạn chưa nhập password',
        ]);
		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
		{
			return redirect('admin/user');
		}else{
			return redirect('admin/login')->with('notification','Login no successfully');
		}
		
	}

	public function get_List_Admin()
	{
		$users = User::all();
		$user_group = UserGroup::all();
		return view('admin.user.list',compact('users','user_group'));
	}

	public function get_Add_Admin()
	{
		$user_group = UserGroup::all();
		return view('admin.user.add',compact('user_group'));
	}

	public function post_Add_Admin(Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Bạn chưa nhập tên group',
        ]);

		$user_group = new User;
		$user_group->name = $request->name;
		$user_group->email = $request->email;
		$user_group->phone = $request->phone;
		$user_group->users_group_id = $request->users_group_id;
		$user_group->password = bcrypt(123456); //rand_string(6);
		$user_group->save();
		return redirect()->back()->with('notification','Add successfully');
	}

	public function get_Edit_Admin($id)
	{
		$user = User::find($id);
		$user_group = UserGroup::all();
		return view('admin.user.edit',compact('user','user_group'));
	}

	public function post_Edit_Admin($id, Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Bạn chưa nhập tên group',
        ]);

		$user = UserGroup::find($id);
		$user->name = $request->name;
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

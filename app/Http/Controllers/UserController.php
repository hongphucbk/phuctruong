<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithHeadings;
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

	public function get_Logout_Admin()
	{
		Auth::logout();
		return redirect('admin/login');
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

		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->phone = $request->phone;
		$user->users_group_id = $request->users_group_id;
		$user->password = bcrypt(123456); //rand_string(6);
		$user->save();
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

		$user = User::find($id);
		$user->name = $request->name;
		$user->email = $request->email;
		$user->phone = $request->phone;
		$user->users_group_id = $request->users_group_id;
		//$user->password = bcrypt(123456); //rand_string(6);
		$user->save();
		return redirect()->back()->with('notification','Edit successfully');
	}
	

	public function get_Delete_Admin($id)
	{
		//Step 1: Delete all user belongTo this group

		//Step 2: Delete all Role in UserRole belongTo this group

		//Step 3: Delete
		$user = User::find($id);
		$user->delete();
		return redirect()->back()->with('notification','Deleted successfully');
	}
	
	public function get_Export_Admin()
	{
		return Excel::download(new UsersExport, 'users.xlsx');
	}
}

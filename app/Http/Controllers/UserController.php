<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
	public function get_User_List_Admin()
	{
		return view('admin.user.list');
	}

	public function getTest()
	{
		return view('admin.user.list');
	}
	
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\HelpdeskActivity;
use App\HelpdeskCategory;

class HelpdeskCategoryController extends Controller
{

	public function get_List_Admin()
	{
		$categories = HelpdeskCategory::all();
		//$user_group = UserGroup::all();
		return view('admin.apps.category.list', compact('categories'));
	}

	public function get_Add_Admin()
	{
		return view('admin.apps.category.add');
	}

	public function post_Add_Admin(Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Please input role name',
        ]);

		$category = new HelpdeskCategory;
		$category->name = $request->name;
		$category->note = $request->note;

		$category->save();
		return redirect()->back()->with('notification','Add successfully');
	}

	public function get_Edit_Admin($id)
	{
		$category = HelpdeskCategory::find($id);
		return view('admin.apps.category.edit',compact('category'));
	}

	public function post_Edit_Admin($id, Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Please input your category',
        ]);

		$category = HelpdeskCategory::find($id);
		$category->name = $request->name;
		$category->note = $request->note;
		$category->save();
		return redirect()->back()->with('notification','Edit successfully');
	}
	

	public function get_Delete_Admin($id)
	{
		//Step 1: Delete all role belongTo this group

		//Step 2: Delete all Role in UserRole belongTo this group

		//Step 3: Delete
		$category = HelpdeskCategory::find($id);
		$category->delete();
		return redirect()->back()->with('notification','Deleted successfully');
	}
}

<?php

namespace App\Http\Controllers\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseCategory;

class CategoryController extends Controller
{
    public function get_List()
	{
		$categories = CourseCategory::all();
		//$user_group = UserGroup::all();
		return view('admin.apps.course.category.list', compact('categories'));
	}

	public function get_Add()
	{
		return view('admin.apps.course.category.add');
	}

	public function post_Add(Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Please input role name',
        ]);

		$category = new CourseCategory;
		$category->name = $request->name;
		$category->note = $request->note;

		$category->save();
		return redirect()->back()->with('notification','Add successfully');
	}

	public function get_Edit($id)
	{
		$category = CourseCategory::find($id);
		return view('admin.apps.course.category.edit',compact('category'));
	}

	public function post_Edit($id, Request $request)
	{
		$this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Please input your category',
        ]);

		$category = CourseCategory::find($id);
		$category->name = $request->name;
		$category->note = $request->note;
		$category->save();
		return redirect()->back()->with('notification','Edit successfully');
	}
	

	public function get_Delete($id)
	{
		//Step 1: Delete all role belongTo this group

		//Step 2: Delete all Role in UserRole belongTo this group

		//Step 3: Delete
		$category = CourseCategory::find($id);
		$category->delete();
		return redirect()->back()->with('notification','Deleted successfully');
	}
}

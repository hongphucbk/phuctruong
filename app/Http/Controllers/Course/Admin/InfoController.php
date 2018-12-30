<?php

namespace App\Http\Controllers\Course\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseInfo;
use App\CourseCategory;

class InfoController extends Controller
{
    public function get_List()
    {
    	$courseinfo = CourseInfo::all();
		
		return view('admin.apps.course.info.list', compact('courseinfo'));
    }

    public function get_Add()
    {
    	$courseinfo = CourseInfo::all();
        $categories = CourseCategory::all();
		return view('admin.apps.course.info.add', compact('courseinfo','categories'));
    }

    public function post_Add(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required'=>'Please input course name',
        ]);

        $courseinfo = new CourseInfo;
        $courseinfo->name = $request->name;
        $courseinfo->duration = $request->duration;
        $courseinfo->price = $request->price;
        $courseinfo->promote_price = $request->promote_price;
        $courseinfo->category_id = $request->category_id;
        $courseinfo->professor = $request->professor;
        $courseinfo->description = $request->description;
        $courseinfo->note = $request->note;

        $courseinfo->save();
        return redirect()->back()->with('notification','Add successfully');
    }
}

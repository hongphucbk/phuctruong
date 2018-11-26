<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PhucTruongController extends Controller
{

	public function get_index()
	{
		return view('pages.layout.index');
	}

	
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
	public function reviews()
	{
		return view('main.reviews');
    }
    public function getReviews(Request $request) {
		$validated = $request->validate([
			'userName'   => 'required|min:3|max:255',
			'review'     => 'required|min:5',
		]);
//	    dd($request->all() );

		return back()->with('success','Thanks for your feedback');

    }
}

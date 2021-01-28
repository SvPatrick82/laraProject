<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
	public function reviews()
	{
		$reviews = Review::paginate(5);

		return view('main.reviews',compact('reviews'));
    }

    public function getReviews(Request $request) {
		$validated = $request->validate([
			'userName'   => 'required|min:3|max:255',
			'review'     => 'required|min:5',
		]);
//	    dd($request->all() );
	    $review = new Review();
	    $review->name = $request->userName;
	    $review->review = $request->review;
	    $review->save();

		return back()->with('success','Thanks for your feedback');

    }

//    public function delReview() {
//		if(isset($_POST['reviewID'])){
//			$value = strip_tags($_POST['reviewID']);
//			$rev = DB::delete("DELETE FROM reviews WHERE reviews.id = $value");
//		}
//	    return back()->with('success','Review deleted');
////	    deleted("DELETE FROM reviews WHERE reviews.id =  $value")
//    }
}

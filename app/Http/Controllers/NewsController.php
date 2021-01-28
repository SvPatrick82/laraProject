<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
	public function news()
	{
		$namePage = 'News';
		$newss = DB::table('news')->paginate(10);
		$users = DB::table('users')->get();

//		dd($newss);
//		dd($users);

		return view('main.news',compact('namePage','newss','users'));
    }
}

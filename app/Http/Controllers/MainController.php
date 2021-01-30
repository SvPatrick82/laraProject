<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{


	public function index()
	{
		$title = 'Welcome';
		$subtitle = '<em> to store </em>';
		$products = Product::with('category')->get(); //category --  название метода в модели
//		dd($products[0]);
//		$categories = Category::all();
//		dd($categories);
		return view('main.index',compact('title','products','subtitle'));
	}



	public function contacts()
	{
		return view('main.contacts');
	}
	public function getContacts(Request $request)
	{
		$validated = $request->validate([
			'name'    => 'required|min:3|max:255',
			'email'   => 'required|email',
			'message' => 'required|min:3',
		]);
		//dd($request->all() );
		//отправлем письмо
        //return redirect('/contacts')->with('success','Thank!');
		//return view('main.contacts');
		return back()->with('success','Thank!');
	}
	public function action(){

		return view('main.action');
	}

//
//	public function StoreController() {
//		$store = 'Store';
//		$products = Product::all();
//		$categories = DB::table('categories')->get();
//
////		dump($categories);
//	    return view('main.sale',compact('store','products','categories'));
//	}
}

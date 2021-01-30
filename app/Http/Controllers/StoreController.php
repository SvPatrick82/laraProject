<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StoreController extends Controller
{
	public function sale() {
		$store = 'Sale';
//		$products = Product::where('recommended','=','1')->where('price','<',75)->orWhere('category_id','=',35)->limit(9)->get();
		$categories = DB::table('categories')->get();

//		$products = Product::where('recommended','=','1')->get();
//		$products = Product::where('recommended','=','1')->first();
//		$products = Product::where('recommended','=','1')->paginate(4);
		$products = Product::where('recommended','=','1')->simplePaginate(3);

//				dd($products);
		return view('main.sale',compact('store','products','categories'));
	}

	public function category($slug)
	{
		$category = Category::where('slug','=',$slug)->firstOrFail();
		$products = Product::where('category_id',$category->id)->paginate(2) ;
//		dd($products->links());
		return view('store.category',compact('category','products'));
	}
}

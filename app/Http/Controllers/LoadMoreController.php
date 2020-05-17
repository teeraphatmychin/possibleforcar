<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\list_car;
use App\list_blog;
use App\Category;
use App\Tag;
class LoadMoreController extends Controller
{
    //
    public function gridLoad(Request $request)
    {   
        // $postGrids = list_car::paginate(6);
    	// if ($request->ajax()) {
    	// 	$view = view('data',compact('postGrids'))->render();
        //     return response()->json(['html'=>$view]);
        // }
        //$posts = list_car::paginate(12);
        $categories = Category::all();
        $posts = list_car::paginate(12);
        $posts2 = list_car::paginate(4);
        
        
    	return view('car-view-grid',compact('categories','posts','posts2'));
    }
    public function blogPost(Request $request)
    {
        $blogs = list_blog::paginate(6);
    	if ($request->ajax()) {
    		$view = view('blog_data',compact('blogs'))->render();
            return response()->json(['html'=>$view]);
        }
    	return view('blog-view-grid',compact('blogs'));
    }

    public function listLoad(Request $request)
    {
        $postLists = list_car::paginate(5);
    	if ($request->ajax()) {
    		$view = view('carListingData',compact('postLists'))->render();
            return response()->json(['html'=>$view]);
        }
    	return view('car-view-list',compact('postLists'));
    }
}

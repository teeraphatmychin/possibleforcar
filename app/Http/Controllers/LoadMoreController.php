<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\list_car;
use App\list_blog;
class LoadMoreController extends Controller
{
    //
    public function gridLoad(Request $request)
    {   
        $postGrids = list_car::paginate(6);
    	if ($request->ajax()) {
    		$view = view('data',compact('postGrids'))->render();
            return response()->json(['html'=>$view]);
        }
        $posts = list_car::paginate(12);
    	return view('car-view-grid',compact('postGrids','posts'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\list_car;
use App\list_blog;
use App\Category;
use App\Tag;
use App\Post;


class LoadMoreController extends Controller
{
    //
   

    public function filter(Request $request){
    $data = $request->all();
    /*echo "<pre>"; print_r($data); die;*/
    //dd($data);
    $categoryUrl="";
    if(!empty($data['categoryFilter'])){
        foreach($data['categoryFilter'] as $category){
            if(empty($categoryUrl)){
                $categoryUrl = "&category=".$category;
            }else{
                $categoryUrl .= "-".$category;
            }
        }
    }

  
    return route('car-view-grid');
}


    public function gridLoad(Request $request)
    {   
        // $postGrids = list_car::paginate(6);
    	// if ($request->ajax()) {
    	// 	$view = view('data',compact('postGrids'))->render();
        //     return response()->json(['html'=>$view]);
        // }
        //$posts = list_car::paginate(12);
        
           
            
            
           

       
        //////
        

        $categories = Category::all();
        $posts = Post::paginate(12);
        $posts2 = Post::paginate(4);
        $postTags =Tag::all();
        



    	return view('pages.car-view-grid',compact('categories','posts2','postTags','posts'));
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

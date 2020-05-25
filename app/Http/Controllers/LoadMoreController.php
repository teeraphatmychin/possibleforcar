<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\list_car;
use App\list_blog;
use App\Category;
use App\Tag;
use App\Post;
use Illuminate\Support\Facades\DB;


class LoadMoreController extends Controller
{
    //
//    public function products(Request $request){
//
//        // $category = Category::find($id);
//        $category = Category::find($id);
//        return view('categories.show')->withCategory($category);
//
//    }

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


    return route('car-view-grids');
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
//        $posts = Post::paginate(12);
//        $posts2 = Post::paginate(4);
        $postTags =Tag::all();


//    	return view('pages.car-view-grid',compact('categories','posts2','postTags','posts'));
    	return view('pages.car-view-grid',compact('categories','postTags'));
    }
    public function gridLoad_iframe(Request $request){
        $posts = Post::paginate(12);
        $posts2 = Post::paginate(4);
        return view('pages.sub-shopgrid-iframe',compact('posts','posts2'));
    }

    public function gridLoad_iframe2($title)
    {

        $sql0 = explode("-",$title,2);
        if(count($sql0) == "1"){
            $posts = DB::select("SELECT * FROM posts WHERE title = '$sql0[0]' limit 12");
            $posts2 = DB::select("SELECT * FROM posts WHERE title = '$sql0[0]' limit 4");
            return view('pages.sub-shopgrid-iframe',compact('posts','posts2'));
        }
        else{
            $sqll = "";
            $sql0 = explode("-",$title);
            foreach ($sql0 as $sql00){
                $sqll .= "title = '$sql00' or ";
            }
            $sqll = substr_replace($sqll ,"",-4);
            $posts = DB::select("SELECT * FROM posts WHERE $sqll limit 12");
            $posts2 = DB::select("SELECT * FROM posts WHERE $sqll limit 4");
            return view('pages.sub-shopgrid-iframe',compact('posts','posts2'));
        }

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

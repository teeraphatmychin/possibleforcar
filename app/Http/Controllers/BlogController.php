<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;

class BlogController extends Controller
{
    //

    public function getIndex() {
		$posts = Post::paginate(10);
		return view('blog.index')->withPosts($posts);
	}

    public function getSingle($slug) {
    	// fetch from the DB based on slug
		$post = Post::where('slug', '=', $slug)->first();
		$postcars = Post::all();
		$categories =Category::all();
		$categoriesfilter =Category::find($slug);
		$postTags =Tag::all();
		// return the view and pass in the post object
        return view('blog.single')->withpost($post)->withPostcars($postcars)->withpostTags($postTags)->withcategories($categories)->withcategoriesfilter($categoriesfilter);
    }
}

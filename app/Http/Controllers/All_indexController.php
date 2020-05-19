<?php

namespace App\Http\Controllers;
use App\Post;

use App\list_car;
use App\list_blog;
use App\list_customer;
use App\Category;
use Illuminate\Http\Request;

class All_indexController extends Controller
{
    //
    public function shop(){
        
        $products=Post::all();
        //$blog_slides=list_blog::all();
        $posts=Post::paginate(8);
        $postCategories=Category::all();
        $postCategories2=Category::all();

        $postcars=Post::all();
        $postcar2s=Post::all()->where('title', '=', 'toyota');
        $byCate="";
        return view('pages.index',compact('products','byCate','posts','postCategories','postcars','postCategories2','postcar2s'));
    }

    
    public function detialpro($id){
        $detail_car=Post::findOrFail($id);
        $slide_similars=list_car::all();
       
        //$imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        //$totalStock=ProductAtrr_model::where('products_id',$id)->sum('stock');
        //$relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('detail-car',compact('detail_car','slide_similars'));
    }
    public function detialpro_blog($id){
        $detail_blog=list_blog::findOrFail($id);        
        //$slide_similars=list_blog::all();
        //$imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        //$totalStock=ProductAtrr_model::where('products_id',$id)->sum('stock');
        //$relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('article-post',compact('detail_blog'));
    }
    
    public function contact_us()
    {
        return view('pages.contact_us');
    }
    public function about_us()
    {
        return view('pages.about_us');
    }

    
}

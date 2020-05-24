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
        $postCategories=Category::inRandomOrder();
        $postCategories2=Category::inRandomOrder();

        $postcars=Post::inRandomOrder();
        $postcarsback=Post::all();
        $postcar2s=Post::all()->where('title', '=', 'toyota');
        $postcar2sback=Post::all()->where('title', '=', 'toyota')->sortByDesc('id');
        $postcar3s=Post::all()->where('title', '=', 'honda');
        $postcar3sback=Post::all()->where('title', '=', 'honda')->sortByDesc('id');
        $postcar4s=Post::all()->where('title', '=', 'mitsubishi');
        $postcar4sback=Post::all()->where('title', '=', 'mitsubishi')->sortByDesc('id');
        $postcar5s=Post::all()->where('title', '=', 'ford');
        $postcar5sback=Post::all()->where('title', '=', 'ford')->sortByDesc('id');
        $postcar6s=Post::all()->where('title', '=', 'mazda');
        $postcar6sback=Post::all()->where('title', '=', 'mazda')->sortByDesc('id');
        $postcar7s=Post::all()->where('title', '=', 'mg');
        $postcar7sback=Post::all()->where('title', '=', 'mg')->sortByDesc('id');
        $postcar8s=Post::all()->where('title', '=', 'nissan');
        $postcar8sback=Post::all()->where('title', '=', 'nissan')->sortByDesc('id');
        $byCate="";
        return view('pages.index',compact('products','byCate','posts','postCategories','postcars','postcarsback','postCategories2','postcar2s','postcar2sback','postcar3s','postcar3sback','postcar4s','postcar4sback','postcar5s','postcar5sback'
        ,'postcar6s','postcar6sback' ,'postcar7s','postcar7sback','postcar8s','postcar8sback' )); 
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

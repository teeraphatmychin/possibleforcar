<?php


namespace App\Http\Controllers;
use App\Post;
use App\list_car;

class PagesController extends Controller{

    public function getIndex(){
        $posts=list_car::orderBy('created_at','desc')->limit(10)->get();
        
        return view ('pages.index')->withPosts($posts);
    }
    public function getAbout(){
        $first ='shin';
        $last =' shin';
        $fullname = $first ." ". $last;
        $email="dkjflsdfj.com";
        $data['email'];
        $data['name'];
        //return view('pages.about')->withfullname($fullname)->withEmail($email)->withdata($data);
    }
    public function getContect(){

    }
}
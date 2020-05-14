<?php


namespace App\Http\Controllers;


class PagesController extends Controller{

    public function getIndes(){

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
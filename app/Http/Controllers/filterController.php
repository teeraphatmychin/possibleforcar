<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class filterController extends Controller
{
    //
    public function index(Request $request)
    {
        $query = Post::all();
        if(isset($request["minimum_price"], $request["maximum_price"]) && !empty($request["minimum_price"]) && !empty($request["maximum_price"]))
        {
            $query .= "
            AND price BETWEEN '".$request["minimum_price"]."' AND '".$request["maximum_price"]."'
            ";
        }
        if(isset($request["title"]))
        {
            $titer_filter = implode("','", $request["title"]);
            $query .= "
            AND titer IN('".$request_filter."')
            ";
        }
        if(isset($request["model"]))
	{
		$request_filter = implode("','", $request["model"]);
		$query .= "
		 AND model IN('".$model_filter."')
		";
	}
        

        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $total_row = $statement->rowCount();
        $output = '';
       
        return $results;

    }
}


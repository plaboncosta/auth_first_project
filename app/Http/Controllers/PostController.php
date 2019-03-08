<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	return view('autocomplete');
    }


    public function fetch(Request $request)
    {
    	if($request->get('query'))
	    {
		    $query = $request->get('query');
		    $data = Post::where('name', 'LIKE', "%{$query}%")
		        ->paginate(10);
		    $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
		    foreach($data as $row)
		    {
		    	$output .= '<li><a href="#">'.$row->name.'</a></li>';
		    }
		    $output .= '</ul>';
		    echo $output;
	    }
    }



    public function search(Request $request)
    {
    	return $request;
    }




}

<?php

namespace App\Http\Controllers;

use App\File;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MyFileController extends Controller
{
    public function index()
    {
    	$images = File::all();
    	return view('myfile', compact('images'));
    }

    public function upload(Request $request)
    {
    	if($request->hasFile('image'))
    	{
    		foreach ($request->image as $key => $myimage) {
    			$imagename = $myimage->getClientOriginalName();
    			if(!file_exists('public/myimage'))
		        {
		            mkdir('public/myimage', 0777, true);
		        }

    			$myimage->move('public/myimage', $imagename);
    			$data[] = $imagename;
    		}
    	}


    	$file = new File();
        $file->name = $request->name;
    	$file->image = json_encode($data);
    	$file->save();
    	return redirect()->back();
    }
}

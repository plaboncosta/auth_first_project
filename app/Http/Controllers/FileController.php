<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
    	return view('file');
    }

    public function upload(Request $request)
    {
    	$image = $request->file('image');
    	if ($image) {
    		foreach ($request->image as $key => $getImage) {
    			$imagename = $getImage->getClientOriginalName();
	    		$getImage->move('upload/' , $imagename);
	    		$data[] = $imagename;
    		}

    		$file = new File();
    		$file->image = json_encode($data);
    		$file->save();
    		
    		return 'yes';
    	}
    }
}

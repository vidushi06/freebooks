<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galleryimg;
class GalleryimgController extends Controller
{
    //
    public function create(){
        return view('admin.add_galleryimg');
    }

    public function insert(Request $data)
     {
    // 	 $this->validate($data,[   
    //    "title"=>"required|max:20|min:3|", //rules
    //    "subtitle"=>"required|max:20|min:3|",
    //    // "email"=>"required|max:30|min:8|email|unique:teachers",
    //    "description"=>"required|max:50|min:6|",
    //    "image"=>"required",
    //    ]);
    	 $file = $data->file('image');
    	// dd($file);//dump and die
    	// exit;
    	$filename = 'image'.time().'.'.$data->image->extension();
            // dd($filename);
            // exit;
    	 $file->move("upload/",$filename);
         //dd($file);
         //exit;
    	//echo "<pre>";
    	// print_r($data->all());
    	$a = new galleryimg;
    	$a->image = $filename;
    	$a->save();

    	if ($a) {
    		return redirect('admin/add_galleryimg')->with('message','successfully added');
    	}
    }
}

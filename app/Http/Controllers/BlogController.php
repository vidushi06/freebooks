<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
class BlogController extends Controller
{
    //
    
    
    public function create(){
        return view('admin.add_blog');
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
    	$a = new blog;
    	$a->image = $filename;
    	$a->title = $data->title;
        $a->subtitle = $data->subtitle;
        $a->imgsub = $data->imgsub;
        $a->postedby = $data->postedby;
        $a->postedat = $data->postedat;
        $a->blog = $data->blog;
        $a->blogquote = $data->blogquote;
        $a->blogend = $data->blogend;
    	$a->save();

    	if ($a) {
    		return redirect('admin/add_blog')->with('message','successfully added');
    	}
    }
}

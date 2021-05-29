<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\welcome;

class WelcomeController extends Controller
{
    public function create(){
        return view('admin.add_welcome');
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
    	$a = new welcome;
    	$a->title = $data->title;
    	$a->subtitle = $data->subtitle;
    	$a->description = $data->description;
    	$a->image = $filename;

    	$a->save();

    	if ($a) {
    		return redirect('admin/add_welcome')->with('message','successfully added');
    	}
    }

        public function show($id)
    {
        $data = welcome::find($id);
        return view('admin.welcome.show',compact('data'));
    }

    public function delete($id)
    {
       $data = welcome::find($id);
       $deleted = $data->delete();
       if ($deleted) {
          return redirect('admin/add_welcome')->with('message','data sucessfully delete');
       }
    }

    public function edit($id)
    {
        $data = welcome::find($id);
        return view('admin.welcome.edit',compact('data'));
    }

    public function update(Request $a)
    {
       // echo "<pre>";
        // print_r($a->all()); // hasFile check karta hai ki image ai hai ya ni
        if ($a->hasFile('image')) {
            $file = $a->file('image');
        // dd($file);//dump and die
        // exit;
        $filename = 'image'. time().'.'.$a->image->extension();
            // dd($filename);
            // exit;
         $file->move("upload/",$filename);
         //dd($file);
         //exit;
         $data = welcome::find($a->id);
         $data->title = $a->title;
         $data->subtitle = $a->subtitle;
         $data->description = $a->description;
         $data->image = $filename;
         $data->save();
         if ($data) {
             return redirect('admin/add_welcome');
         }
        }
        else{
            $data = welcome::find($a->id);
            $data->title = $a->title;
            $data->subtitle = $a->subtitle;
            $data->description = $a->description;
             $data->save();
              if ($data) {
             return redirect('admin/add_welcome');
         }
        }
    }
}

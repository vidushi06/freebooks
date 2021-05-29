<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\menuimage;
class MenuimageController extends Controller
{
    //
    public function create(){
        return view('admin.add_image');
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
    	$a = new menuimage;
        $a->ititle = $data->ititle;
        $a->isubtitle = $data->isubtitle;
        $a->iprice = $data->iprice;
    	$a->image = $filename;
    	$a->save();

    	if ($a) {
    		return redirect('admin/add_image')->with('message','successfully added');
    	}
    }

    public function delete($id)
    {
       $data = menuimage::find($id);
       $deleted = $data->delete();
       if ($deleted) {
          return redirect('admin/add_image')->with('message','data sucessfully delete');
       }
    }

    public function edit($id)
    {
        $data = menuimage::find($id);
        return view('admin.menu.image_edit',compact('data'));
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
         $data = menuimage::find($a->id);
         $data->title = $a->title;
         $data->description = $a->description;
         $data->image = $filename;
         $data->save();
         if ($data) {
             return redirect('admin/add_image');
         }
        }
        else{
            $data = menuimage::find($a->id);
            $data->title = $a->title;
            $data->description = $a->description;
        
             $data->save();
              if ($data) {
             return redirect('admin/add_image');
         }
        }
    }
}

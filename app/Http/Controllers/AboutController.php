<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
class AboutController extends Controller
{
    //
     public function create(){
        return view('admin.add_about');
    }

    public function insert(Request $data)
     {
        $a = new about;
        $a->title = $data->title;
        $a->subtitle = $data->subtitle;
        $a->description = $data->description;
        $a->subdescription = $data->subdescription;
        $a->save();

        if ($a) {
            return redirect('admin/add_about')->with('message','successfully added');
       }
      }
}

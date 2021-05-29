<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;
class GalleryController extends Controller
{
    //
     public function create(){
        return view('admin.add_galery');
    }

    public function insert(Request $data)
     {
        $a = new gallery;
        $a->gtitle = $data->gtitle;
        $a->gdescription = $data->gdescription;
        $a->save();

        if ($a) {
            return redirect('admin/add_gallery')->with('message','successfully added');
        }
    }
}

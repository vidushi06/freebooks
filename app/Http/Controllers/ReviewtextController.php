<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reviewtext;
class ReviewtextController extends Controller
{
    //
     public function create(){
        return view('admin.review.add_reviewtext');
    }

    public function insert(Request $data)
     {
    	$a = new reviewtext;
    	$a->name = $data->name;
    	$a->post = $data->post;
    	$a->comment = $data->comment;
    	$a->save();

    	if ($a) {
    		return redirect('admin/add_reviewtext')->with('message','successfully added');
    	}
    }
}

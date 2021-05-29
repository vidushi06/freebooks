<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\review;
class ReviewController extends Controller
{
    //
    public function create(){
        return view('admin.review.add_reviewtitle');
    }

    public function insert(Request $data)
     {
    	$a = new review;
    	$a->title = $data->title;
    	$a->subtitle = $data->subtitle;
    	$a->save();

    	if ($a) {
    		return redirect('admin/add_reviewtitle')->with('message','successfully added');
    	}
    }
}

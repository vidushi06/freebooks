<?php

namespace App\Http\Controllers;
use App\banner;
use App\welcome;
use App\menu;
use App\menuimage;
use App\gallery;
use App\galleryimg;
use App\review;
use App\reviewtext;
use App\about;
use App\blog;
use App\contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = banner::all();
        $b = welcome::all();
        $menu = menu::all();
        $mimages = menuimage::all();
        $gallery = gallery::all();
        $gimage = galleryimg::all();
        $review = review::all();
        $txt = reviewtext::all();
    	return view('front.index',compact('data','b','menu','mimages','gallery','gimage','review','txt'));
    
    }

    public function menu()
    {
        $menu = menu::all();
        $mimg = menuimage::all();
        $review = review::all();
        $txt = reviewtext::all();
    	return view('front.menu',compact('menu','mimg','review','txt'));
    }
    public function about()
    {
        $abt = about::all();
    	return view('front.about',compact('abt'));
    }
    
    public function gallery()
    {
        $gallery = gallery::all();
        $gimage = galleryimg::all();
        return view('front.gallery',compact('gallery','gimage'));
    }

    public function blogd()
    {
        $blog = blog::all();
        return view('front.blogd',compact('blog'));
    }

    public function contact_info()
    {
        $conn = contact::all();
        return view('front.contact',compact('conn'));
    }

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function add_banner()
    {
    	$data = banner::all();
    	$i = 1;
    	return view('admin.banner.add_banner',compact('data','i'));
    }

    public function add_welcome()
    {
        $data = welcome::all();
        $i = 1;
        return view('admin.welcome.add_welcome',compact('data','i'));
    }
    public function add_menu()
    {
        $data = menu::all();
        $i = 1;
        return view('admin.menu.add_menu',compact('data','i'));
    }

    public function add_menuimage()
    {
        $data = menuimage::all();
        $i = 1;
        return view('admin.menu.add_image',compact('data','i'));
    }

    public function add_gallery()
    {
        $data = gallery::all();
        $i = 1;
        return view('admin.gallery.add_gallery',compact('data','i'));
    }

    public function add_galleryimg()
    {
        $data = galleryimg::all();
        $i = 1;
        return view('admin.gallery.add_galleryimg',compact('data','i'));
    }

    public function add_reviewtitle()
    {
        $data = review::all();
        $i = 1;
        return view('admin.review.add_reviewtitle',compact('data','i'));
    }

    public function add_reviewtext()
    {
        $data = reviewtext::all();
        $i = 1;
        return view('admin.review.add_reviewtext',compact('data','i'));
    }

    public function add_about()
    {
        $data = about::all();
        $i = 1;
        return view('admin.about.add_about',compact('data','i'));
    }

    public function add_blog()
    {
        $data = blog::all();
        $i = 1;
        return view('admin.blog.add_blog',compact('data','i'));
    }

    public function contact_info()
    {
        $data = contact::all();
        $i = 1;
        return view('admin.contact.contact_info',compact('data','i'));
    }
  
}

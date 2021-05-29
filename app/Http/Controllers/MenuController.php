<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
class MenuController extends Controller
{
    //
    public function create(){
        return view('admin.add_menu');
    }

    public function insert(Request $data)
     {
    	$a = new menu;
    	$a->name = $data->name;
    	$a->subname = $data->subname;
    	$a->save();

    	if ($a) {
    		return redirect('admin/add_menu')->with('message','successfully added');
    	}
    }

    public function delete($id)
    {
       $data = menu::find($id);
       $deleted = $data->delete();
       if ($deleted) {
          return redirect('admin/add_menu')->with('message','data sucessfully delete');
       }
    }

    public function edit($id)
    {
        $data = menu::find($id);
        return view('admin.menu.edit_menu',compact('data'));
    }

    public function update(Request $a)
    {
       
            $data = menu::find($a->id);
            $data->name = $a->name;
            $data->subname = $a->subname;
        
             $data->save();
              if ($data) {
             return redirect('admin/add_menu');
         }
        
    }
}

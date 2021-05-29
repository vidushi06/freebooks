<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
class ContactController extends Controller
{
    //
     public function create(){
        return view('admin.contact_info');
    }

    public function insert(Request $data)
     {
        $a = new contact;
        $a->phone = $data->phone;
        $a->email = $data->email;
        $a->location = $data->location;
        $a->aboutus = $data->aboutus;
        $a->address = $data->address;
        $a->phonesec = $data->phonesec;
        $a->emailsec = $data->emailsec;
        $a->monday = $data->monday;
        $a->tuewed = $data->tuewed;
        $a->satsun = $data->satsun;
        $a->save();

        if ($a) {
            return redirect('admin/contact_info')->with('message','successfully added');
       }
      }
}

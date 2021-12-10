<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Top_Header extends Controller
{
    //header
    public function ap_header(){
        return view('admin.appearance.header');
    }
}

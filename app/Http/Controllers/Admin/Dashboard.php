<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //Dashboard--------------------
    public function dashboard(){
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin.dashboard.dashboard',$data);
    }
}
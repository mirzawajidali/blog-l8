<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contact extends Controller
{
    //Contact Page -----------------
    public function contact(){
        return view('blog.pages.contact');
    }
}

<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    //Home Page
    public function home(){
        return view('blog.pages.home');
    }
}

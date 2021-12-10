<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Main_Slider;
use Illuminate\Http\Request;

class Home extends Controller
{
    //Home Page
    public function home(){
        $main_sliders = Main_Slider::get();
        return view('blog.pages.home',compact('main_sliders'));
    }
}

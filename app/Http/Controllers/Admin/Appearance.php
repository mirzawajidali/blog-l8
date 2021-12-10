<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppearanceModel;
use App\Models\Main_Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Appearance extends Controller
{
    //Main Slider
    public function main_slider(){
        $main_sliders = Main_Slider::get();
        return view('admin.appearance.main-slider',compact('main_sliders'));
    }

    //Main Slider Upload
    public function main_slider_upload(Request $request){
      $request->validate([
          'content' => 'required|min:5',
          'image'   => 'required'
      ],[
          'content.required' => 'Please Enter Slider Text',
          'content.min'      => 'Slider Text must be greater than 4 characters',
          'image.required'   => 'Please Select Image',
      ]);

      $image_file  = $request->file('image');
      $extension   = strtolower($image_file->getClientOriginalExtension());
      $random_name = hexdec(uniqid());
      $image_fname = $random_name.".".$extension;
      $location    = "public/images/";
      $image_last  = $location.$image_fname;
      $image_move  = $image_file->move($location,$image_fname);
      $insert_data = Main_Slider::insert([
          'heading' => $request->heading,
          'content' => $request->content,
          'image'   => $image_last,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
      if($insert_data){
          return back()->with('success','Main Slider Setup successfully!',3);
      }else{
          return back()->with('error','Sorry! Something went wrong',3);
      }
    }

    //Main Slider Delete
    public function main_slider_delete($id){
        $main_slider = Main_Slider::where('id',$id)->first();
        $deleted     = $main_slider->delete();
        if($deleted){
            unlink($main_slider['image']);
            return back()->with('success','Main Slider Deleted Successfully!',3);
        }
    }
}

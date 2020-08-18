<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
use Input;
use App\banner;
use Image;


class BannerController extends Controller
{
    public function add_banners(Request $request){

    	if($request->isMethod('post')){

    		$data= $request->all();
    		//echo "<pre>"; print_r($data); die;
            $file = $request->file('image');
            // dd($file);
            // exit;
           $filename = 'image'. time().'.'.$request->image->extension();
            // dd($filename);
            // exit;

           $file->move("upload/banner/",$filename);
           
           // dd($filename);
           // exit;

    		$banner = new banner;
            $banner->title = $data['title'];
    		$banner->url = $data['url'];
            $banner->image=$filename;
            $banner->save();
    	 return redirect('view_banners')->with('message','Banner Added Successfully!');

    	}

    	return view('admin.banner.add_banners');
    }

    public function view_banners(){

        $banners= banner::inRandomOrder()->get();

        return view('admin.banner.view_banners',compact('banners'));
    }
}

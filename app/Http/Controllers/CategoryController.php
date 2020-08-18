<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {   
      if($request->isMethod('post')){
      	$data=$request->all();
        //print_r($data);
        //die();
      	$category = new category;
      	$category->name = $data['name'];
      	$category->parent_id = $data['parent_id'];
      	$category->category_url = $data['category_url'];
      	$category->description = $data['description'];
      	$category->save();
      	return redirect('/add_category')->with('flash_message_success','Category added');



      }
        
      $levels= category::where(['parent_id'=>0])->get();
    	return view('admin.category.add_category')->with(compact('levels'));;
    }

    public function viewcategory()
    {
      $categories = category::get();
      return view('admin.category.view_category')->with(compact('categories'));
    }

    public function editcategory(Request $request, $id=null)
    {
      if($request->isMethod('post')){
        $data =$request->all();
        category::where(['id'=>$id])->update([

          'name'=>$data['name'],
          'parent_id'=>$data['parent_id'],
          'description' =>$data['description'],
          'category_url'=>$data['category_url']]);

        return redirect('/view_category')->with('flash_message_success','category update');
      }



      $category_Details =category::where(['id'=>$id])->first();
      $levels =Category::where(['parent_id'=>0])->get();
      return view('admin.category.edit_category')->with(compact('levels','category_Details'));
    }



    public function deletecategory($id=null)
    {
      //Alert::success('Deleted Successfully', 'Success Message');

         category::where(['id'=>$id])->delete();
         return redirect()->back()->with('flash_message_success','category Deleted');
    }
    public function category_status($id)
    {
        //echo $id;
        $cat =category::where('id',$id)->get()->first();
        //print_r($cat);
        if($cat->status==1)
            $status=0;
        else
            $status=1;
       //$cat1 =category::where('id',$id)->get()->first();
         //print_r($cat1);
      $cat->status=$status;
       $cat->update();
    }
}

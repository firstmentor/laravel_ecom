<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Product;
use App\Product_images;
use Image;
use Session;
use App\cart;
use DB;


class ProductController extends Controller
{
     public function addProduct(Request $request){

        if($request->isMethod('post')){

            $data= $request->all();
            //echo "<pre>"; print_r($data); die;
            $file = $request->file('image');
            // dd($file);
            // exit;
           $filename = 'image'. time().'.'.$request->image->extension();
            // dd($filename);
            // exit;

           $file->move("upload/product/",$filename);
           
           //dd($filename);
           //exit;
            
            $product = new Product;

            $product->cat_id = $data['cat_id'];
            $product->product_name = $data['product_name'];
            $product->product_code = $data['product_code'];
            //$product->size = $data['size'];
            $product->description = $data['description'];
            $product->price = $data['price'];
            $product->quantity = $data['quantity'];
            $product->featured_product = $data['featured_product'];
            $product->popular_product = $data['popular_product'];
            $product->latest_product = $data['latest_product'];
            $product->image=$filename;
            $product->save();
                
           return redirect('/view_products')->with('success_message','Product has been added successfully!');
        }


        $categories=category::where(['parent_id'=>0])->get();
        //print_r($categories);
        //die();
        //$categories_dropdown="<option selected disabled>Select</option>";

        return view('admin.product.add_product',compact('categories'));
    }


    //view products
    public function view_products(Request $request){

        $products= Product::get();

        // foreach ($products as $key => $val) {

        //     $category_name= Category::where(['id'=>$val->cat_id])->first();
        //     $products[$key]->cat_name=$category_name->cat_name;
        // }

         //print_r($products); die;
        return view('admin.product.view_products',compact('products'));
    }
    //delete products

     public function delete_products(Request $request, $id = null){

        //echo $id; die;

        Product::where(['id'=>$id])->delete();

        return redirect()->back()->with('message','Product Deleted Successfully!');
    }



    public function delete_multiple_products(Request $request){ 

        $delete_id= $request->input('delete_id');
        //dd($delete_id);
        Product::whereIn('id',$delete_id)->delete();
        return redirect()->back()->with('success_message','Selected Product Successfully Deleted!');
    }




    public function edit_products(Request $request, $id = null){

        if($request->isMethod('post')){
              $data= $request->all();
            //echo "<pre>"; print_r($data); die;
                if($request->hasFile('image')){ 
                     $data= $request->all();
            //echo "<pre>"; print_r($data); die;
            $file = $request->file('image');
            // dd($file);
            // exit;
           $filename = 'image'. time().'.'.$request->image->extension();
            // dd($filename);
            // exit;

           $file->move("upload/product/",$filename);


               
                    
                }else{

                    $filename = $data['current_image'];
                }
            Product::where(['id'=>$id])->update(['cat_id'=>$data['cat_id'],'product_code'=>$data['product_code'],'product_name'=>$data['product_name'],'price'=>$data['price'],'quantity'=>$data['quantity'],'description'=>$data['description'],'featured_product'=>$data['featured_product'],'popular_product'=>$data['popular_product'],'latest_product'=>$data['latest_product'],'image'=>$filename]);
            return redirect()->back()->with('success_message','Product edited successfully!');

        }

        $productDetails= Product::where(['id'=>$id])->first();
        $categories=category::where(['parent_id'=>0])->get();




        $categories_dropdown="<option selected disabled>Select</option>";

        foreach ($categories as $cat) {
            if($cat->id==$productDetails->cat_id){
                $selected="selected";
            }else{
                $selected="";
            }
            $categories_dropdown .= "<option value='".$cat->id."'".$selected.">".$cat->name."</option>";
            

           
        }
        //categories dropdown end
        return view('admin.product.edit_product',compact('productDetails','categories_dropdown'));
    }



    public function add_images(Request $request,$id=null){

        

        

          if($request->isMethod('post')){
            $data =$request->all();
            //print_r($data);die;

          $file = $request->file('image');
          $filename = 'image' . time().'.'.$request->image->extension();
          $file->move("upload/product/productimages/",$filename);
          // dd($file);
          // exit;

                    $image= new Product_images;
                    $image->image=$filename;
                    $image->product_id=$data['product_id'];
                    $image->save();
                   

                
                return redirect()->back()->with('message','Images Added Successfully!');
            }
            $product= Product::where(['id'=>$id])->first(); 
            $product_images= Product_images::where('product_id',$id)->get();
            // dd($product_images);
            // exit;

        
        return view('admin.product.add_images',compact('product','product_images'));
    }
    public function product_details($id=null)
       {
         $productdetails = Product::where('id',$id)->first();
          //echo $productdetails;die;
          $ProductImages =Product_images::where('product_id',$id)->get();
          //$ProductImages= Product_image::where('product_id',$id)->get();
          $featuredProducts = Product::where(['featured_product'=>1])->get();
          return view('front.product_details')->with(compact('productdetails','ProductImages','featuredProducts'));
       }


    public function addtoCart(Request $request){
        // Session::forget('CouponAmount');
        // Session::forget('CouponCode');

        $data=$request->all();
       // echo "<pre>";print_r($data);die;  

        if(empty($data['useremail'])){
          $data['useremail']= '';
        }
        
        
        $session_id=Session::get('session_id');
        if(empty($session_id)){

           $session_id=str_random(40);
           Session::put('session_id',$session_id); 
        }
        //composer require laravel/helpers
        // $session_id = str_random(40); 
        // Session::put('session_id',$session_id);


        // if(empty($data['session_id'])){
        //   $data['session_id']= '';
        // }
        $countProducts =DB::table('carts')->where(['product_id'=>$data['product_id'],'product_code'=>$data['product_code'],'session_id'=>$session_id])->count();
        if($countProducts>0){
            return redirect()->back()->with('message','Product already exit');
        }


      DB::table('carts')->insert(['product_id'=>$data['product_id'],'product_name'=>$data['product_name'],'product_code'=>$data['product_code'],'price'=>$data['price'],'quantity'=>$data['quantity'],'useremail'=>$data['useremail'],'session_id'=>$session_id]); 

      return redirect('/cart')->with('message','Product Succesfully Added To In Cart!');

      }


      public function cart(Request $request){
        $session_id=Session::get('session_id'); 
        $userCart = DB::table('carts')->where(['session_id'=>$session_id])->get();
        
        foreach($userCart as $key=>$products){
            //echo$products->product_id;


      $productDetail=Product::where(['id'=>$products->product_id])->first();
             //$userCart[$key]->image="";
             $userCart[$key]->image=$productDetail->image;
        }


        // echo "<pre>";
        // print_r($userCart);
        // die();
       
        return view('front.cart',compact('userCart'));
    }

    public function deleCart($id){
        // Session::forget('CouponAmount');
        // Session::forget('CouponCode');

        DB::table('carts')->where('id',$id)->delete();

        return redirect()->back()->with('message','Product Succesfully Deleted!');
    }

    public function updatecartquantity($id=null,$quantity=null)
    {   
        // Session::forget('CouponAmount');
        // Session::forget('CouponCode');
        DB::table('carts')->where('id',$id)->increment('quantity',$quantity);
        return redirect('/cart')->with('message','Product quantity has been updated');

    }
     public function applyCoupon(Request $request)
    {
        //Session::forget('CouponAmount');
        //Session::forget('CouponCode');
        if($request->isMethod('post')){
            $data =$request->all();
          echo "<pre>";print_r($data);
        $couponCount = Coupons::where('coupon_code',$data['coupon_code'])->count();
        if($couponCount==0){
            return redirect()->back()->with('flash_message_error','Coupon code dose not exists');
        }else{

            // echo "success";die;
            $couponDetails =Coupons::where('coupon_code',$data['coupon_code'])->first();
            //Coupon code status
            if($couponDetails->status==0){
                return rediredt()->back()->with('flash_message_error','Coupon code is not active');
            }
            //CHECK COUPON EXPIRY DATE
            $expiry_date =$couponDetails->expiry_date;
            $current_date =date('y-m-d');
            if($expiry_date < $current_date){
                return redirect()->back()->with('flash_message_error','Coupon code is Expired');
            }
            //Coupon is ready for discount  

            $session_id =Session::get('session_id');
            $userCart =DB::table('cart')->where(['session_id'=>$session_id])->get();
            $total_amount =0;
            foreach ($userCart as $item) {
                $total_amount =$total_amount +($item->price*$item->quantity);
            }
            //check if coupon amount is fixed or percentage
            if($couponDetails->amount_type=="Fixed"){
                $couponAmount = $couponDetails->amount;

            }else{
                $couponAmount =$total_amount * ($couponDetails->amount/100);
            }
            //Add Coupon code is session
            Session::put('CouponAmount',$couponAmount);
            Session::put('CouponCode',$data['coupon_code']);
            return redirect()->back()->with('flash_message_error','Coupon code is Succesfully');
        }
        }
    }
}

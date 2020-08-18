<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coupon;

class CouponsController extends Controller
{
    public function addcoupon(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$data =$request->all();
    		//echo"<pre>"; print_r($data);die;
    		$coupon =new coupon;
    		$coupon->coupon_code =$data['coupon_code'];
    		$coupon->amount=$data['amount'];
    		$coupon->amount_type =$data['amount_type'];
    		$coupon->expiry_date =$data['expiry_date'];
    		$coupon->save();
    		return redirect('/add_coupon');
    	}	
    	return view('admin.coupons.addcoupon');
    }

    public function viewcoupon()
    {
    	$coupons =coupon::get();
    	return view('admin.coupons.viewcoupon')->with(compact('coupons'));
    }
}

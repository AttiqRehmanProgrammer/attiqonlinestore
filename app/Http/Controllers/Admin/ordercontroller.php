<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product; 
use Auth;

class ordercontroller extends Controller
{
    public function index ()
    {
        $order=order::with('product', 'user')->get();
        return view('order.ordersview',compact('order'));
    }


// realtion product one two many rel
    public function buy($id) {
        $product=product::findorfail($id);
         $userId=Auth::user()->id;
         $order=New order;
         $order->product_id=$id;
         $order->user_id=$userId ;
         $order->price=1;
        //  $order->save();
         if($order->save())
{
// echo "success";
return redirect('/home')->with('success', 'New Order Add Cart');

// return redirect('/customer/view');
}
else{
    echo "<h1>issuse ";
    return back()->with('issuse', 'please order not Add go back.');
}

        
        //  print_r($request->all()); 

        return redirect()->back();
      }


      public function orderdelete($id){

        order::find($id)->delete();
        return redirect('/home')->with('successing', 'Your Order  is Deleteted');
    
        
            }






}

<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;


class usercontroller extends Controller
{  
    //  fuction use the page open
    public function user(){
        return view('user-layouts.extend_user');
    }
    // public function user(){
    //     return view('user-layouts.welcome');
    // }



  
    // fetch data database user side

    public function products(){
       
        $products=product::get();
      
        return view('user-layouts.extend_user',compact('products'));
    } 


    

    
    // public function details($id){
       
    //     $products=product::get($id);
      
    //     return view('user-layouts.extend_user',compact('products'));
    // }

    // public function details($id) {
    //     $show=product::find($id);
    //     return view('user-layouts.extend_user')->with(compact('show'));
    //   }
 
}

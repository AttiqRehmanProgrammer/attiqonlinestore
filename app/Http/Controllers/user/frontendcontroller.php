<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class frontendcontroller extends Controller
{
    public function show ()
    {
        return view('details');
    }



// this function details page
    public function details($id) {


        
        $product=product::findorfail($id);
        return view('details')->with(compact('product'));
      }
}

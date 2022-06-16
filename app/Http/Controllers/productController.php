<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productController extends Controller
{
    // Create Form
public function createproductForm() {
    return view('productForm.product-form');
  }


  // Store Form data in database
  public function productpost(Request $request) {
    // Form validation
    $this->validate($request, [
        'title' => 'required',
        'description' => 'required',
        'image'=>'required',
     ]);


    //  Store data in database
    // Form::create($request->all());
    // return back()->with('success', 'Your form has been submitted.');
 $pro=new product;
$pro->title=$request['title'];
$pro->description=$request['description'];
$pro->image=($request['image' ]);
$pro->price=$request['price'];
if($request->hasfile('image'))
{
    $file = $request->file('image' );
    $extenstion = $file->getClientOriginalExtension();
    $filename = time().'.'.$extenstion;
    $file->move('uploads/product/', $filename);
    $pro->image = $filename;
}
if($pro->save())
{
// echo "success";
return redirect('/table/view')->with('success', 'Your form has been   succesfully submitted.');

// return redirect('/customer/view');
}
else{
    echo "<h1>issuse ";
    return back()->with('issuse', 'Your form has been   Not sand submitted.');
}

        
        //  print_r($request->all()); 
}

public function tableget() {
    $show=product::all();
    return view('productTable.product-table')->with(compact('show'));
  }


  public function delete($id){

    product::find($id)->delete();
    return redirect()->back();

    
        }

        public function edit($id){

            $product = product::find($id);
            return View('productForm.product-form-edit')->with(compact('product'));
         // return redirect('edit_page');
        
         
         // return view('edit_page',campact('$Cust'));
        }
        public function update (Request $request,$id)
        {
       
            // echo "(pre)";
            // print_r($request->all());
            $pro = product::find($id);
            $pro->title=$request['title'];
            $pro->description=$request['description'];
            $pro->image=($request['image' ]);
            // $pro->update();
          
            // return redirect('/table/view');
            
if($pro->update())
{
// echo "success";
return redirect('/table/view')->with('success', 'Your form has been  Edit succesfully.');

// return redirect('/customer/view');
}
else{
    echo "<h1>issuse ";
    return back()->with('issuse', 'Your form has been   Not submitted.');
}
            
        }
        


}

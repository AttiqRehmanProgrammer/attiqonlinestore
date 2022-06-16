

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>order_view</title>
</head>
<body>

@extends('layout.admin-main')

@section('content')
<section class="content">
      <div class="container">
<div class="row">

          <div class="col-12">
            <div class="card">
      
              <div class="card-header">
    
                <h3 class="card-title text-danger ">order_view</h3>

                @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
        @endif  
                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 10px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div> -->
              </div>

            
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Order-Id</th>
                      <th>User-Id</th>
                      <th>Product-Id</th>
                      <th>Product Name</th>
                      <th>user Name</th>
                      <th>Price</th>
                      <th>image</th>
                      <th>Action</th>
                      <!-- <th> <a href="{{url('/form/product')}} " class="btn btn-primary" > Add Product </a></th> -->
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($order as $product)
<th> {{$product->id}}</th>
<th>{{$product->user->id}}</th>
<th>{{$product->product->id}}</th>
<th>{{$product->product->title}}</th>
<th>{{$product->user->name}}</th>
<th>{{$product->product->price}}</th>
<!-- <th><img src="{{asset('uploads/product/' .$product->image)}}" width="50px;" height="50px;" alt="image  "></th> -->
            <th></th>
       
<th>
                @if($product->status =="0")
                
                 <a herf="">
            <span class="badge badge-success">Active</span>

                   </a>
                @else
                
                <a herf="">
            <span class="badge badge-danger">inactive</span>

                   </a>
                
                @endif
            </th>
            <th>
                    </div>
          <a href="{{url('/product/delete')}}/{{$product->id}}">
         <button class="btn btn-danger">pending....</button>
        </a>
       <!-- <a href="{{url('/product/edit')}}/{{$product->id}}">
        <button class="btn btn-success">Edit</button> -->
         </a>
            
        </th>
        </tr>
        
        @endforeach    
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
           
        </div>
</div>
</section>
</body>
</html>














@endsection
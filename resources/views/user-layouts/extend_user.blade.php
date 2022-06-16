
@extends('user-layouts.usermain')

@section('content')
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
  
        <div class="col-md-10">
        @foreach($products as  $product)
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                <img  class="img-fluid img-responsive rounded product-image" src="{{asset('uploads/product/' .$product->image)}} "  width="200px;" height="200px;" alt=""></div>
                <div class="col-md-6 mt-1">
                    <h5>{{$product->title}}</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>{{$product->price}}</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1"><span>100% warranty</span><span class="dot"></span><span>No change</span><span class="dot"></span><span>Best finish<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                    <p class="text-justify text-truncate para mb-0">{{$product->description}}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Selling</h4><span class="strike-text"></span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4">
                        <button class="btn btn-primary btn-sm" type="button">Details</button>
                        <a href="{{route('detail',$product->id)}}">
                    <button class="btn btn-outline-primary btn-md mt-3" type="button">Add to wishlist
                        
                    </button></a></div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
                       
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                        </div>
                    @endif
 
<h3 class="bg-light text-center " >Your Orders </h3>


<table class="table table-light ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Data&Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <div class="card-body">
                @if(Session::has('successing'))
                        <div class="alert alert-danger text-center" role="alert">
                        {{Session::get('successing')}}
                        </div>
                    @endif



  @if(count($orders)>0)
    @foreach ($orders as $order)
    <tr>
      <th scope="row">{{$order->product->id}}</th>
      <td>   <img src="{{asset('uploads/product/' .$order->product->image)}}" width="60px;" height="50px;"alt=""></td>
      <td>{{$order->product->title}}</td>
      <td>{{$order->product->price}}</td>
      <td>{{date('m-d-y',strtotime($order->created_at))}}</td>
      <td>  <a href="{{url('/order/delete')}}/{{$order->id}}">
         <button class="btn btn-danger">delete</button>
        </a></td>
    
        
    </tr>
    @endforeach
        @else
    <tr>
    <td>NO record Fund</td>
    </tr>
    @endif
   
  </tbody>
</table>


@endsection

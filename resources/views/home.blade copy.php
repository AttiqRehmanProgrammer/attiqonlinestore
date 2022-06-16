@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                        </div>
                    @endif
 
<h3>Your orders </h3>

<table class="table">
    <tbody>
        @if(count($orders)>1)
    @foreach ($orders as $order)
        <tr>
            <td>
            <img src="{{asset('uploads/product/' .$order->product->image)}}" width="200px;" height="200px;"alt="">
            <!-- <img src="{{Storage::url($order->product->image)}} "  width="200px;" height="200px;" alt=""> -->
            </td>
            <td>{{$order->product->title}}</td>
            <td>{{date('m-d-y',strtotime($order->created_at))}}</td>
          
        </tr>
        @endforeach
        @else
        <tr>
              
<td>NO record Fund</td>

            </tr>
           
            @endif
    </tbody>
</table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

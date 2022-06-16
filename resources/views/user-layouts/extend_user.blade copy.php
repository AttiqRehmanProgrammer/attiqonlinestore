
@extends('user-layouts.usermain')

@section('content')
<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">NEW PRODUCT </h3>
							<div class="row">

  
								<div class="col-md-12 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
                                        @foreach($products as  $product)
                                            <!-- <img src="adminPanel/uploads/" class="img-fluid" alt=""> -->
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
                                            <img src="{{asset('uploads/product/' .$product->image)}} "  width="200px;" height="200px;" alt="">
											</h4>
											<div class="info-product-price my-2">
                                           
										
                                        		<a href="{{route('detail',$product->id)}}" class="">{{$product->title}}</a>
                                                <br>
                                                <a href="{{url('detail')}}/{{$product->id}}" class="">{{$product->price}}</a>
                                            
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												
                                            @endforeach
											</div>
										</div>
									</div>
								</div>
					
       
       
							</div>
    
                        

                       
@endsection

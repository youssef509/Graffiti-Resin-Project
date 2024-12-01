@extends('frontend.layout')

@section('title', __('messages.Products') . ' - ' . $productData->product_name)

@section('page-content')

<br><br><br><br><br><br><br>

    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>@lang('messages.Products')</h1>
                <ul>
                    <li class="item"><a href="{{route('home')}}">@lang('messages.Home')</a></li>
                    <li class="item"><a href="{{route('products')}}"><i class="flaticon-play-button"></i>@lang('messages.Products')</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{asset('frontend/assets/img/banner.jpg')}}" alt="Banner Image">
        </div>
    </div>
    <!-- end page title area -->
    
   <!-- start member details section -->
		<section class="member-details-section ptb-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<div class="image">
							<img src="{{$productData->image_url}}" alt="Product Image">
						</div>
					</div>       
					<div class="col-lg-8">
						<div class="content">
							<div class="member-info">
								<h3>{{$productData->product_name}}</h3>
								<p>{{$productData->product_description}}</p>
							</div>
                            <a href="{{ url("uploads/products/{$productData->product_pdf}") }}" target="_blank" class="primary-btn">
                                <i class="flaticon-pdf-file"></i> TDS
                            </a>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- end member details section -->



@endsection
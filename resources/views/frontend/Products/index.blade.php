@extends('frontend.layout')
@section('meta-seo' )
    <meta name="description" content="{{$metaSeo->meta_description}}">
    <meta name="keywords" content="{{$metaSeo->meta_keywords}}">
    <meta name="robots" content="{{$metaSeo->meta_title}}">
@endsection
@section('title', __('messages.Products'))
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

    <!-- start team section -->
    <section class="team-members-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($productsData as $products)
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="image">
                            <img src="{{$products->image_url}}" alt="Demo Image">
                        </div>
                        <div class="content">
                            <h3><a href="{{route('products-show', $products->id)}}">{{$products->product_name}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end team section -->



@endsection
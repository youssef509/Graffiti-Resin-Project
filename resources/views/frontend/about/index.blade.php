@extends('frontend.layout')
@section('meta-seo' )
    <meta name="description" content="{{$metaSeo->meta_description}}">
    <meta name="keywords" content="{{$metaSeo->meta_keywords}}">
    <meta name="robots" content="{{$metaSeo->meta_title}}">
@endsection
@section('title', __('messages.About'))

@section('page-content')
<br><br><br><br><br><br><br>
<!-- start page title area-->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>@lang('messages.About')</h1>
            <ul>
                <li class="item"><a href="{{route('home')}}">@lang('messages.Home')</a></li>
                <li class="item"><a href="{{route('about-us')}}"><i class="flaticon-play-button"></i>@lang('messages.About')</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{asset('frontend/assets/img/banner.jpg')}}" alt="Demo Image">
    </div>
</div>
<!-- end page title area -->


@include('frontend.partials.about')

@include('frontend.partials.partiners')

@include('frontend.partials.hero')

@include('frontend.partials.testimonial')

@endsection
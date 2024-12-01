@extends('frontend.layout')

@section('title', __('messages.Services'))

@section('page-content')

<br><br><br><br><br><br><br>

<!-- start page title area-->
<div class="page-title-area ptb-100">
    <div class="container">
        <div class="page-title-content">
            <h1>@lang('messages.Services')</h1>
            <ul>
                <li class="item"><a href="{{route('home')}}">@lang('messages.Home')</a></li>
                <li class="item"><a href="{{route('services')}}"><i class="flaticon-play-button"></i>@lang('messages.Services')</a></li>
            </ul>
        </div>
    </div>
    <div class="bg-image">
        <img src="{{asset('frontend/assets/img/banner.jpg')}}" alt="Demo Image">
    </div>
</div>
<!-- end page title area -->

@include('frontend.partials.services')

@include('frontend.partials.partiners')

@include('frontend.partials.hero')

@include('frontend.partials.testimonial')

@endsection
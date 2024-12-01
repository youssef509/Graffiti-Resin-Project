@extends('frontend.layout')
@section('meta-seo' )
    <meta name="description" content="{{$metaSeo->meta_description}}">
    <meta name="keywords" content="{{$metaSeo->meta_keywords}}">
    <meta name="robots" content="{{$metaSeo->meta_title}}">
@endsection
@section('title', __('messages.Home'))

@section('page-content')

@include('frontend.partials.slider')

@include('frontend.partials.about')

@include('frontend.partials.partiners')

@include('frontend.partials.services')

@include('frontend.partials.projects')

@include('frontend.partials.whyus')

@include('frontend.partials.hero')

@include('frontend.partials.testimonial')

@include('frontend.partials.blog')

@include('frontend.partials.newsletter')




@endsection
@extends('frontend.layout')

@section('title', 'About Page')

@section('page-content')
<br><br><br><br><br><br><br>
@include('frontend.partials.nav')


@include('frontend.partials.about')

@include('frontend.partials.partiners')

@include('frontend.partials.hero')

@include('frontend.partials.testimonial')

@endsection
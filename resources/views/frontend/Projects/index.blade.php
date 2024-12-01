@extends('frontend.layout')
@section('meta-seo' )
    <meta name="description" content="{{$metaSeo->meta_description}}">
    <meta name="keywords" content="{{$metaSeo->meta_keywords}}">
    <meta name="robots" content="{{$metaSeo->meta_title}}">
@endsection
@section('title', __('messages.Projects'))

@section('page-content')

<br><br><br><br><br><br><br>

    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>@lang('messages.Projects')</h1>
                <ul>
                    <li class="item"><a href="{{route('home')}}">@lang('messages.Home')</a></li>
                    <li class="item"><a href="{{route('projects')}}"><i class="flaticon-play-button"></i>@lang('messages.Projects')</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{asset('frontend/assets/img/banner.jpg')}}" alt="Banner Image">
        </div>
    </div>
    <!-- end page title area -->

    <!-- start projects section -->
		<section class="projects-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($projectsData as $projects)
                    <div class="col-lg-4 col-md-6">
						<div class="projects-item">
							<div class="image">
								<img src="{{$projects->image_url}}" alt="Project Image">
							</div>
							<div class="overlay-content">
								<h3><a href="{{route('projects-show', $projects->id)}}">{{$projects->project_name}}</a></h3>
								{{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
							</div>
						</div>
					</div>
                    @endforeach
                </div>
            </div>
        </section>
		<!-- end projects-section -->



@endsection
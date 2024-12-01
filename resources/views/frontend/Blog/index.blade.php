@extends('frontend.layout')
@section('meta-seo' )
    <meta name="description" content="{{$metaSeo->meta_description}}">
    <meta name="keywords" content="{{$metaSeo->meta_keywords}}">
    <meta name="robots" content="{{$metaSeo->meta_title}}">
@endsection
@section('title', __('messages.Blog'))

@section('page-content')

<br><br><br><br><br><br><br>

    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>@lang('messages.Blog')</h1>
                <ul>
                    <li class="item"><a href="{{route('home')}}">@lang('messages.Home')</a></li>
                    <li class="item"><a href="{{route('blog')}}"><i class="flaticon-play-button"></i>@lang('messages.Blog')</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{asset('frontend/assets/img/banner.jpg')}}" alt="Banner Image">
        </div>
    </div>
    <!-- end page title area -->

    <!-- start blog area -->
		<div class="blog-grid ptb-100">
			<div class="container">
				<div class="row justify-content-center">
                    @foreach($AllBlogData as $BlogsData)
					<div class="col-lg-4 col-md-6  col-sm-6 col-sm-6">
						<div class="blog-item-single">
							<div class="blog-item-img">
								<img src="{{$BlogsData->image_url}}" alt="Blog Image" />
								<div class="overlay-content">
									<a href="{{route('blog-show', $BlogsData->id)}}"><i class="flaticon-add"></i></a>
								</div>
							</div>
							<div class="blog-item-content">
								<h3><a href="{{route('blog-show', $BlogsData->id)}}">{{$BlogsData->title}}</a></h3>
								<div class="cta-btn">
									<a href="{{route('blog-show', $BlogsData->id)}}" class="read-more-btn"><i class="flaticon-play-button"></i>@lang('messages.ReadMore')</a>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	<!-- end blog area -->



@endsection
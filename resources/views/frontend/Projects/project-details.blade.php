@extends('frontend.layout')

@section('title', __('messages.Projects') . ' - ' . $projectData->project_name)

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

   <!-- start service details area -->
<div class="projects service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="image">
                    <img src="{{$projectData->image_url}}" alt="Demo Image">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="project-info">
                    <h3>@lang('messages.ProjectInformation')</h3>
                    <ul class="info-list">
                        <li>
                            <a href="#"><i class="flaticon-play-button"></i>@lang('messages.Client'):</a>
                            <span>{{$projectData->project_customer}}</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="flaticon-play-button"></i>
                                @lang('messages.Category'):
                            </a>
                            <span>
                                @if(App::getLocale() === 'ar')
                                    {{ $category->ar_name }}
                                @else
                                    {{ $category->eng_name }}
                                @endif
                            </span>
                        </li>
                        <li>
                            <a href="#"><i class="flaticon-play-button"></i>@lang('messages.Location'):</a>
                            <span>{{$projectData->project_location}}</span>
                        </li>
                        <li>
                            <a href="#"><i class="flaticon-play-button"></i>@lang('messages.Date'):</a>
                            <span>{{$projectData->project_date}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <h2>{{$projectData->project_name}}</h2>
            <p>
                {{$projectData->project_description1}}
            </p>
            <p>
                {{$projectData->project_description2}}           
            </p>
        </div>
        <div class="projects-area">
            
        </div>
        <div class="projects-area">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="projects-area">
                        <div class="service-details-slider owl-carousel">
                            @foreach($projectsImages as $projectImages)
                            <div class="slider-item">
                                <img src="{{$projectImages->image_url}}" alt="Project Image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end service details area -->



@endsection
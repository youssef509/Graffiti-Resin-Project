@extends('frontend.layout')

@section('title', __('messages.Blog') . ' - ' . $SingleBlogData->title)

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
    
   <!-- start blog details area -->
   <div class="blog-details-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="image">
                        <img src="{{$SingleBlogData->image_url}}" alt="image" />
                    </div>
                    
                    <div class="content">
                        <h2>{{$SingleBlogData->title}}</h2>
                        <p>
                            {{$SingleBlogData->text1}}
                        </p>
                        <p>
                            {{$SingleBlogData->text2}}
                        </p>
                        <p>
                            {{$SingleBlogData->text3}}
                        </p>
                        <p>
                            {{$SingleBlogData->text4}}
                        </p>
                    </div>
                   
                    
                    
                    <hr />
                    
                    <hr>
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end blog details area -->



@endsection
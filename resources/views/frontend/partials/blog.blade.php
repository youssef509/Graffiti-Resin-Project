<!-- start blog section -->
<section class="blog-section pb-100 bg-primary">
    <div class="container">
        <div class="section-title style-two">
            <h2>@lang('messages.ourBlog')</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
        </div>
        <div class="row justify-content-center">
            @foreach( $blogData as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog-item-single">
                    <div class="blog-item-img">
                        <img src="{{$blog->image_url}}" alt="Blog Image" />
                        <div class="overlay-content">
                            <a href="{{route('blog-show', $blog->id)}}"><i class="flaticon-add"></i></a>
                        </div>
                    </div>
                    <div class="blog-item-content">
                        <h3><a href="{{route('blog-show', $blog->id)}}">{{$blog->title}}</a></h3>
                        <div class="cta-btn">
                            <a href="{{route('blog-show', $blog->id)}}" class="read-more-btn"><i class="flaticon-play-button"></i>@lang('messages.ReadMore')</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="cta-btn text-center">
            <a href="{{route('blog')}}" class="primary-btn">@lang('messages.ExploreAllNews')</a>
        </div>
    </div>
</section>
<!-- end blog section -->
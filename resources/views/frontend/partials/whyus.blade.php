<!-- start instrument section -->
@foreach($WhyusData as $whyus)
<section class="instrument-section pb-100 bg-primary">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-sm-12 col-md-12">
                <div class="video-content">
                    <a href="{{$whyus->video_url}}" class="video-btn youtube-popup">
                        <i class="flaticon-play-button"></i>
                    </a>
                    <div class="video-image">
                        <img src="{{$whyus->image_url}}" alt="Demo Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-md-12">
                <div class="instrument-content">
                    <h2><span>Instrument</span> That We Use</h2>
                    <h3>{{$whyus->title1}}</h3>
                    <p>{{$whyus->text1}}</p>
                    <h3>{{$whyus->title2}}</h3>
                    <p>{{$whyus->text2}}</p>
                </div>
            </div>
            <div class="col-lg-10 col-sm-12 m-auto">
                <div class="instrument-slider owl-carousel">
                    @foreach($projectsData as $projects)
                    <div class="slider-item">
                        <div class="image">
                            <img src="{{$projects->image_url}}" alt="Main Image">
                        </div>
                        <div class="overlay-content">
                            <h3><a href="{{route('projects-show', $projects->id)}}">{{$projects->project_name}}</a></h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- end instrument section -->

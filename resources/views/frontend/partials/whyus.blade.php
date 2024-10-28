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
                    <div class="slider-item">
                        <div class="image">
                            <img src="frontend/assets/img/instruments/instrument-img-1.jpg" alt="Demo Image">
                        </div>
                        <div class="overlay-content">
                            <h3><a href="projects-details.html">CE400-8 <br> Excavator</a></h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="image">
                            <img src="frontend/assets/img/instruments/instrument-img-2.jpg" alt="Demo Image">
                        </div>
                        <div class="overlay-content">
                            <h3><a href="projects-details.html">TE786-1 <br> Excavator</a></h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="image">
                            <img src="frontend/assets/img/instruments/instrument-img-3.jpg" alt="Demo Image">
                        </div>
                        <div class="overlay-content">
                            <h3><a href="projects-details.html">90400-E <br> Excavator</a></h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="image">
                            <img src="frontend/assets/img/instruments/instrument-img-4.jpg" alt="Demo Image">
                        </div>
                        <div class="overlay-content">
                            <h3><a href="projects-details.html">BX900-8 <br> Excavator</a></h3>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="image">
                            <img src="frontend/assets/img/instruments/instrument-img-5.jpg" alt="Demo Image">
                        </div>
                        <div class="overlay-content">
                            <h3><a href="projects-details.html">TX900-8 <br> Excavator</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
<!-- end instrument section -->

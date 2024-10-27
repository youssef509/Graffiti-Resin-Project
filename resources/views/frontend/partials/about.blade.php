 <!-- start about section -->
 @foreach($homeaboutData as $homeabout)
 <section id="about" class="about-section about-style-two pt-100 pb-70 bg-primary">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="about-img-content">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 pr-0">
                            <div class="about-image">
                                <img src="{{ asset('uploads/homeabout/' . $homeabout->image1) }}" alt="Demo Image">
                            </div>
                            <div class="about-fact">
                                <div class="content">
                                    <h4>85+ Clients</h4>
                                    <span>Satisfied By Us</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 pl-0">
                            <div class="about-fact ml-auto">
                                <div class="content">
                                    <h4>25+ Years</h4>
                                    <span>Of Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay-img">
                        <img src="{{ asset('uploads/homeabout/' . $homeabout->image2) }}" alt="Demo Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-content">
                    <h2>@lang('messages.HomeAboutUs')</span></h2>
                    <p>{{$homeabout->text1}}.</p>
                    <p>{{$homeabout->text2}}</p>
                    <div class="about-item-list">
                        <ul>
                            <li><i class="flaticon-play-button"></i>{{$homeabout->item1}}</li>
                            <li><i class="flaticon-play-button"></i>{{$homeabout->item2}}</li>
                            <li><i class="flaticon-play-button"></i>{{$homeabout->item3}}</li>
                            <li><i class="flaticon-play-button"></i>{{$homeabout->item4}}</li>
                            <li><i class="flaticon-play-button"></i>{{$homeabout->item5}}</li>
                        </ul>
                    </div>
                    <div class="cta-btn">
                        <a href="about-us.html" class="primary-btn">Explore About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 @endforeach
<!-- end about section -->

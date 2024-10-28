<!-- start testimonial section -->
<section class="testimonial-section testimonial-two ptb-100 bg-primary">
    <div class="container">
        <div class="section-title style-two">
            <h2><span>Thoughts</span> Of Our Satisfied Client About Us</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 m-auto">
                <div class="testimonial-slider owl-carousel">
                    @foreach( $testimonialData as $testimonial)
                    <div class="slider-item">
                        <i class="flaticon-quotation-mark"></i>
                        <p>
                            {{$testimonial->text}}
                        </p>
                        <div class="client-img" style="max-width: 82px;">
                            <img src="{{$testimonial->image_url}}" alt="client-1" />
                        </div>
                        <div class="client-info">
                            <h6>{{$testimonial->person}}</h6>
                            <span>{{$testimonial->position}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end testimonial section -->

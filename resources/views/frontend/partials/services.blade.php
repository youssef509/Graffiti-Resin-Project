<!-- start best service section -->
<section class="best-service-section ptb-100 bg-primary">
    <div class="container">
        <div class="section-title style-two">
            <h2>@lang('messages.ourServices')</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/bricks.png" alt="Icon"></i>
                    <h3><a href="{{route('quote.index')}}">@lang('messages.service1')</a></h3>
                    <p>@lang('messages.Training')</p>
                    <div class="cta-btn">
                        <a href="{{route('quote.index')}}" class="read-more-btn"><i class="flaticon-play-button"></i>@lang('messages.orderService')</a>
                    </div>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/barrier.png" alt="Icon"></i>
                    <h3><a href="services-details.html">@lang('messages.service2')</a></h3>
                    <p>@lang('messages.Providingresinmaterials')</p>
                    <div class="cta-btn">
                        <a href="{{route('quote.PurchasingMaterials')}}" class="read-more-btn"><i class="flaticon-play-button"></i>@lang('messages.orderService')</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/brush.png" alt="Icon"></i>
                    <h3><a href="services-details.html">@lang('messages.service3')</a></h3>
                    <p>@lang('messages.Securingworktools')</p>
                    <div class="cta-btn">
                        <a href="services-details.html" class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/blueprint.png" alt="Icon"></i>
                    <h3><a href="services-details.html">@lang('messages.service4')</a></h3>
                    <p>@lang('messages.Projectimplementation')</p>
                    <div class="cta-btn">
                        <a href="{{route('quote.implementationOfWorks')}}" class="read-more-btn"><i class="flaticon-play-button"></i>@lang('messages.orderService')</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/measurement1.png" alt="Icon"></i>
                    <h3><a href="services-details.html">@lang('messages.service5')</a></h3>
                    <p>@lang('messages.Consultation')</p>
                    <div class="cta-btn">
                        <a href="services-details.html" class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/concrete-mixer.png" alt="Icon"></i>
                    <h3><a href="services-details.html">@lang('messages.service6')</a></h3>
                    <p>@lang('messages.Serviceandwarranty')</p>
                    <div class="cta-btn">
                        <a href="services-details.html" class="read-more-btn"><i class="flaticon-play-button"></i> Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end best service section -->
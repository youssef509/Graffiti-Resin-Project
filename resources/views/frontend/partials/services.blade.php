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
                    <i><img src="frontend/assets/img/icons/worker.png" alt="Icon"></i>
                    <h3><a href="{{route('quote.index')}}">@lang('messages.service1')</a></h3>
                    <p>@lang('messages.Training')</p>
                    <div class="cta-btn">
                        <a href="{{route('quote.index')}}" class="read-more-btn"><i class="flaticon-play-button"></i>@lang('messages.orderService')</a>
                    </div>  
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/blueprint.png" alt="Icon"></i>
                    <h3><a href="{{route('quote.PurchasingMaterials')}}">@lang('messages.service2')</a></h3>
                    <p>@lang('messages.Providingresinmaterials')</p>
                    <div class="cta-btn">
                        <a href="{{route('quote.PurchasingMaterials')}}" class="read-more-btn"><i class="flaticon-play-button"></i>@lang('messages.orderService')</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/measure.png" alt="Icon"></i>
                    <h3><a href="">@lang('messages.service3')</a></h3>
                    <p>@lang('messages.Securingworktools')</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/architect.png" alt="Icon"></i>
                    <h3><a href="{{route('quote.implementationOfWorks')}}">@lang('messages.service4')</a></h3>
                    <p>@lang('messages.Projectimplementation')</p>
                    <div class="cta-btn">
                        <a href="{{route('quote.implementationOfWorks')}}" class="read-more-btn"><i class="flaticon-play-button"></i>@lang('messages.orderService')</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/blueprint.png" alt="Icon"></i>
                    <h3><a href="">@lang('messages.service5')</a></h3>
                    <p>@lang('messages.Consultation')</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item-single">
                    <i><img src="frontend/assets/img/icons/house2.png" alt="Icon"></i>
                    <h3><a href="">@lang('messages.service6')</a></h3>
                    <p>@lang('messages.Serviceandwarranty')</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end best service section -->
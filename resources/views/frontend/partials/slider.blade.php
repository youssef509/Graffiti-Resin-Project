<!-- start home banner area -->
@foreach($sliderData as $slider)
<div class="home-banner-area banner-two" style="background-image: url('{{ $slider->image_url }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-12 ">
                <div class="banner-content">
                    <h1>
                        {{$slider->text1}}
                    </h1>
                    <p>
                        {{$slider->text2}}
                    </p>
                    <div class="cta-btn">
                        <a href="{{$slider->button_url}}" class="primary-btn">{{$slider->button_text}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- end home banner area -->

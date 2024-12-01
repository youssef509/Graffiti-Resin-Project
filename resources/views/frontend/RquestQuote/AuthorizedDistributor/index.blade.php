@extends('frontend.layout')
@section('css')
    <link href={{ asset("backend/assets/libs/sweetalert2/sweetalert2.min.css")}} rel="stylesheet">
@endsection
@section('title', __('messages.authorizeddistributor'))
@section('page-content')
<br><br><br><br><br><br><br>

    <!-- start page title area-->
    <div class="page-title-area ptb-100">
        <div class="container">
            <div class="page-title-content">
                <h1>@lang('messages.authorizeddistributor')</h1>
                <ul>
                    <li class="item"><a href="{{route('home')}}">@lang('messages.Home')</a></li>
                    <li class="item"><a href="{{route('contact')}}"><i class="flaticon-play-button"></i>@lang('messages.authorizeddistributor')</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{asset('frontend/assets/img/banner.jpg')}}" alt="Banner Image">
        </div>
    </div>
    <!-- end page title area -->

    <!-- start contact  area -->
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="contact-info">
                        @foreach($contactData as $contact)
                        <div class="info-item">
                            <i class='flaticon-smartphone'></i>
                            <div class="info-content">
                                <p>@lang('messages.callus')</p>
                                <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class='flaticon-email'></i>
                            <div class="info-content">
                                <p>@lang('messages.mailus')</p>
                                <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="info-item">
                            <i class='flaticon-address'></i> 
                            <div class="info-content">
                                <p>@lang('messages.visitus')</p>
                                <a href="#">32,Wales Street,USA</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div class="content">
                            <h3>@lang('messages.authorizeddistributor')</h3>
                        </div>
                        <form  method="post" action="{{route('quote.authorizedDistributor-send')}}" >
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="@lang('messages.name')" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control"  required data-error="Please enter your phone" placeholder="@lang('messages.phone')" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" required data-error="Please enter your city" placeholder="@lang('messages.city')" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="street" class="form-control" required data-error="Please enter your street" placeholder="@lang('messages.street')" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="shop_name" class="form-control"  data-error="Please enter your shop_name" placeholder="@lang('messages.PointofSaleName')" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="shop_type" class="form-control" required data-error="Please enter your shop_type" placeholder="@lang('messages.WhattypeofPOSactivity')" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="shop_size" class="form-control" required data-error="Please enter your shop_size" placeholder="@lang('messages.Pointofsalespace')" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="shop_products" class="form-control" required data-error="Please enter your shop_products" placeholder="@lang('messages.Productssoldatpointofsale')" />
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="cta-btn">
                                <button type="submit" class="primary-btn">@lang("messages.quotesend")</button>
                                <div id="msgSubmit" class="h5 text-center hidden"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d109139.63581471992!2d44.64544146193563!3d24.052781627007636!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f079c19b984d1%3A0x3894d7bd038e9542!2sGraffiti%20Resin%20Company!5e1!3m2!1sen!2str!4v1733016316909!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact area -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = {!! json_encode(session('success')) !!};
            var errorMessage = {!! json_encode(session('error')) !!};

            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: '@lang("messages.successtitle")',
                    text: successMessage,
                    confirmButtonText: 'OK',
                    timer: 5000
                });
            }

            if (errorMessage) {
                Swal.fire({
                    icon: 'error',
                    title: '@lang("messages.generalerror")',
                    text: errorMessage,
                    confirmButtonText: 'OK',
                    timer: 5000
                });
            }
        });
    </script>
@endsection
@section('js')
    <!-- Sweet Alerts js -->
    <script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Sweet alert init js-->
    <script src="{{ asset('backend/assets/js/pages/alert.init.js')}}"></script>
@endsection

@extends('frontend.layout')
@section('css')
    <link href={{ asset("backend/assets/libs/sweetalert2/sweetalert2.min.css")}} rel="stylesheet">
@endsection
@section('page-content')

    <!-- start contact  area -->
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <div class="info-item">
                            <i class='flaticon-smartphone'></i>
                            <div class="info-content">
                                <p>call us</p>
                                <a href="tel:+14854560102">(009) 01361246741 </a>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class='flaticon-email'></i>
                            <div class="info-content">
                                <p>mail us</p>
                                <a href="mailto:hello@constik.com">hello@constik.com</a>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class='flaticon-address'></i>
                            <div class="info-content">
                                <p>visit us</p>
                                <a href="#">32,Wales Street,USA</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div class="content">
                            <h3>Get In touch</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus totam minima quam a ab cumque eos nulla eaque animi non natus totam minima quam.</p>
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
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-check checkbox agree-label">
                                        <input
                                            name="gridCheck"
                                            value="I agree to the terms and privacy policy."
                                            class="form-check-input"
                                            type="checkbox"
                                            id="gridCheck"
                                            required
                                        >
                                        <label class="form-check-label" for="gridCheck">
                                            I agreed Constik <a href="terms-of-service.html">Terms of Services</a> and <a href="privacy-policy.html">Privacy Policy</a>
                                        </label>
                                        <div class="help-block with-errors gridCheck-error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cta-btn">
                                <button type="submit" class="primary-btn">send message</button>
                                <div id="msgSubmit" class="h5 text-center hidden"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14823.53387790955!2d-74.10481152434619!3d40.63980156434487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24e10d24b9eb3%3A0xdbac10f1e9c9180b!2s32%20Wales%20Pl%2C%20Staten%20Island%2C%20NY%2010310%2C%20USA!5e0!3m2!1sen!2sbd!4v1602133511419!5m2!1sen!2sbd"></iframe>
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

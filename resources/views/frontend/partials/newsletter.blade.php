<!-- start newsletter section -->
<section class="newsletter-section newsletter-two bg-primary">
    <div class="container">
        <div class="content-container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="newsletter-content ptb-100">
                        <h2>@lang('messages.OurNewsletter')</h2>
                        <form class="newsletter-form" data-toggle="validator">
                            <div class="input-group">
                                <input class="form-control" placeholder="E-mail" type="text" name="EMAIL" required=""
                                autocomplete="off">
                                <div class="cta-btn">
                                    <button class="primary-btn" type="submit">
                                        @lang('messages.Subscribe')
                                    </button>
                                </div>
                            </div>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end newsletter section -->
    <!-- News letter area -->
    <div class="news-letter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-md-30px mb-lm-30px">
                    <div class="title-newsletter">
                        <h2>Sign Up For Newsletters</h2>
                        <p class="des">Be the First to Know. Sign up for newsletter today !</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div id="mc_embed_signup" class="subscribe-form">
                        <form class="validate" novalidate="" name="mc-embedded-subscribe-form" action="#" onsubmit="return false">
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required=""
                                    placeholder="Enter your email here.." name="EMAIL" value="" />
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="" />
                                </div>
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"
                                        value="Sign Up" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News letter area  End -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <div class="footer-logo">
                                    <a href="{{ route('home.page') }}"><img class="img-responsive" style="max-width: 200px"
                                            src="{{ asset('assets/images/logo/logo.png') }}" alt="logo.jpg" /></a>
                                </div>
                                <p class="text-infor">
                                   {{ env('APP_NAME') }} has curated a portfolio of products that meet the networking needs of all individuals. Now, as the connected lifestyle continues to evolve, the company is expanding today to exceed the demands of tomorrow.
                                </p>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-6 mb-md-30px mb-lm-30px">
                            <div class="single-wedge text-center">
                                <h4 class="footer-herading">Quick Links</h4>
                                <div class="footer-links">
                                    @include('_inc.header')
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Contact Us</h4>
                                <div class="need_help">
                                    <p class="add"><span class="address">Address:</span> {{ env('APP_ADDRESS') }} </p>
                                    <p class="mail"><span class="email">Email:</span> <a
                                            href="mailto:{{ env('APP_ADDRESS') }}">{{ env('APP_ADDRESS') }}</a></p>
                                    <p class="phone"><span class="call us">Call Us:</span> <a
                                            href="tel:{{ env('APP_TFN') }}"> {{ env('APP_TFN') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-paymet-warp d-flex justify-content-center align-items-center">
                                <div class="heading-info">Payment:</div>
                                <div class="payment-way">
                                    <img class="payment-img img-responsive"
                                        src="{{ asset('assets/images/icons/payment.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-tags">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tag-content" style="float:none">
                                @include('_inc.header')
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <p class="copy-text">Copyright © <a href="{{ route('home.page') }}"> {{ env('APP_NAME') }}</a>. All
                                Rights
                                Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

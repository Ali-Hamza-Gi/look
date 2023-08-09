@extends('layoyts.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a href="{{ route('home.page') }}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- contact area start -->
    <div class="contact-area mtb-50px">
        <div class="container">
            <div class="contact-map mb-10">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="{{ env('APP_IFRAME') }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
            <div class="custom-row-2">
                <div class="col-lg-4 col-md-5 mb-lm-30px">
                    <div class="contact-info-wrap">
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="ion-android-call"></i>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="{{ env('APP_TFN') }}">{{ env('APP_TFN') }}</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="ion-android-globe"></i>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="ion-android-pin"></i>
                            </div>
                            <div class="contact-info-dec">
                                <p>{{ env('APP_ADDRESS') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <div class="contact-title mb-30">
                            <h2>Get In Touch</h2>
                        </div>
                        <form class="contact-form-style" id="contact-form"
                            action="#" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="name" placeholder="Name*" type="text" />
                                </div>
                                <div class="col-lg-6">
                                    <input name="email" placeholder="Email*" type="email" />
                                </div>
                                <div class="col-lg-12">
                                    <input name="subject" placeholder="Subject*" type="text" />
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Your Message*"></textarea>
                                    <button class="submit" type="submit">SEND</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
@endsection

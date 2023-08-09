@extends('layoyts.master')
@section('title')
    Home
@endsection
@section('content')
        <!-- Slider Start -->
    <div class="slider-area slider-dots-style-3">
        <div class="hero-slider-wrapper">
            <!-- Single Slider  -->
            <div class="single-slide slider-height-3 bg-img d-flex"
                data-bg-image="assets/images/slider-image/sample-7.jpg">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-1 text-left">
                        <h1 class="animated color-black">
                            Full HD 180-Degree
                            <br />
                            Wifi-Camera
                        </h1>
                        <p class="animated color-gray">DCS-934L day & night wifi camera.</p>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Single Slider  -->
            <div class="single-slide slider-height-3 bg-img d-flex"
                data-bg-image="assets/images/slider-image/sample-8.jpg">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-2 text-left ">
                        <h1 class="animated color-black">
                            Xbox One Pro <br />
                            Wireless Controller
                        </h1>
                        <p class="animated color-gray">Revolution Pro Controller.</p>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Single Slider  -->
            <div class="single-slide slider-height-3 bg-img d-flex"
                data-bg-image="assets/images/slider-image/sample-9.jpg">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-3 text-left">
                        <h1 class="animated color-black">
                            Bobovr Z4 Virtual <br />
                            Reality 3D Glasses
                        </h1>
                        <p class="animated color-gray">Virtual reality through a new lens</p>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Single Slider  -->
        </div>
    </div>
    <!-- Slider End -->
    <!-- Banner Area Start -->
    <div class="banner-area mt-50px mb-20px ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-wrapper">
                        <a href="shop-4-column.html"><img src="assets/images/banner-image/11.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-wrapper">
                        <a href="shop-4-column.html"><img src="assets/images/banner-image/12.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Arrivals Area Start -->
    <div class="arrival-area mt-20px mb-20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>New Arrivals</h2>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs sub-category">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab-1">Products</a>
                            </li>
                        </ul>
                        <!-- Nav tabs -->
                    </div>
                </div>
            </div>
            <!-- tab content -->
            <div class="tab-content">
                <!-- First-Tab -->
                <div id="tab-1" class="tab-pane active fade">
                    <!-- Arrivel slider start -->
                    <div class="row m-0">
                        @foreach ($products as $product)
                            <div class="mb-30px col-md-4 col-lg-3 col-sm-6  p-0">
                                <div class="slider-single-item">
                                    <!-- Single Item -->
                                    <article class="list-product p-0 text-center">
                                        <div class="product-inner">
                                            <div class="img-block">
                                                <a href="single-product.html" class="thumbnail">
                                                    <img class="first-img" src="{{ asset('assets/product_images/'.$product->image) }}" alt="" style="width: 200px;height:200px" />
                                                </a>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li>
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal"
                                                                data-title="{{ strlen($product->title) > 40 ? substr($product->title, 0, 40) . '...' : $product->title }}" data-image="{{ asset('assets/product_images/'.$product->image) }}" data-price="{{ $product->price }}" data-description="{{ $product->description }}">
                                                                <i class="lnr lnr-magnifier"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-decs">
                                                <h2><a href="single-product.html" class="product-link">{{ strlen($product->title) > 40 ? substr($product->title, 0, 40) . '...' : $product->title }}</a></h2>
                                                <div class="pricing-meta">
                                                    <ul>
                                                        <li class="current-price">${{ $product->price }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="#" class="add-to-curt" title="Add to cart">Add to
                                                    cart</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Arrivel slider end -->
                </div>
                <!-- First-Tab -->
            </div>
            <!-- tab content end-->
        </div>
    </div>
    <!-- Arrivals Area End -->
    <!-- category Area Start -->
    <div class="popular-categories-area popular-categories-area-2  bg-light-gray pt-50px pb-50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="section-heading">Best Selling</h2>
                    </div>
                </div>
            </div>
            <div class="popular-category-slider-wrapper slider-nav-style-2">
                @foreach ($popular_products as $product)
                    <div class="single-slider-item">
                        <div class="thumb-category">
                            <a href="single-product.html">
                                <img src="{{ asset('assets/product_images/'.$product->image) }}" alt="product-image.jpg" style="width: 250px;height:250px"/>
                            </a>
                        </div>
                        <div class="category-discript">
                            <h4>{{ strlen($product->title) > 22 ? substr($product->title, 0, 22) . '...' : $product->title }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- category Area End -->
    <!-- Static Area Start -->
    <div class="static-area mtb-50px">
        <div class="container">
            <div class="static-area-wrap">
                <div class="row">
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-1.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Free Shipping</h4>
                                <p>On all orders over $75.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-2.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Free Returns</h4>
                                <p>Returns are free within 9 days</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-3.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>100% Payment Secure</h4>
                                <p>Your payment are safe with us.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static">
                            <img src="assets/images/icons/static-icons-4.png" alt="" class="img-responsive" />
                            <div class="single-static-meta">
                                <h4>Support 24/7</h4>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Static Area End -->
    <!-- Feature Area Start -->
    <div class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Featured Products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="feature-slider-wrapper slider-nav-style-1">
                        @foreach ($products as $item)
                        <div class="slider-single-item">
                                @foreach ($products->shuffle()->take(2) as $product)
                                <!-- Single Item -->
                                <article class="list-product text-center mb-30px">
                                    <div class="product-inner">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="{{ asset('assets/product_images/'.$product->image) }}" alt="" style="width: 200px;height:200px" />
                                            </a>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li>
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal"
                                                            data-title="{{ strlen($product->title) > 40 ? substr($product->title, 0, 40) . '...' : $product->title }}" data-image="{{ asset('assets/product_images/'.$product->image) }}" data-price="{{ $product->price }}" data-description="{{ $product->description }}">
                                                            <i class="lnr lnr-magnifier"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-decs">
                                            <h2><a href="single-product.html" class="product-link"> {{ strlen($product->title) > 30 ? substr($product->title, 0, 30) . '...' : $product->title }} </a></h2>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="current-price">${{ $product->price }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                </div>
                <!-- Feature Area End -->
                <div class="col-lg-4 col-md-4 mt-lm-30px">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Hot Deals</h2>
                            </div>
                        </div>
                    </div>
                    <div class="hot-deal-slider-wrapper slider-nav-style-1">
                        @foreach ($products->shuffle() as $product)
                            <div class="slider-single-item">
                                <!-- Single Item -->
                                <article class="list-product text-center">
                                    <div class="product-inner">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="{{ asset('assets/product_images/'.$product->image) }}" alt="" style="width: 350px;height:350px" />
                                            </a>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li>
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-bs-toggle="modal"
                                                            data-title="{{ strlen($product->title) > 40 ? substr($product->title, 0, 40) . '...' : $product->title }}" data-image="{{ asset('assets/product_images/'.$product->image) }}" data-price="{{ $product->price }}" data-description="{{ $product->description }}">
                                                            <i class="lnr lnr-magnifier"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-decs">
                                            <h2><a href="single-product.html" class="product-link"> {{ strlen($product->title) > 40 ? substr($product->title, 0, 40) . '...' : $product->title }} </a></h2>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="current-price">${{ $product->price }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="availability-list in-stock">Availability: <span>Available In Stock</span>
                                        </div>
                                        <div class="clockdiv">
                                            <div data-countdown="2023/12/01"></div>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="#" class="add-to-curt" title="Add to cart">Add to cart</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Area End -->
    <!-- Catogery slider area Start-->
    <div class="category-slider-area mb-20px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-md-30px mb-lm-30px">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Home Audio</h2>
                            </div>
                        </div>
                    </div>
                    <div class="category-slider-wraper slider-nav-style-1">

                        <div class="slider-single-item">
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/19.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/20.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Silicon Sleeping
                                                Earbuds</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/13.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/14.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Numkuda USB 2.0
                                                Gamepad</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Edifier H840
                                                Audiophile</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="slider-single-item">
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">SoundBox Pro Portable</a>
                                        </h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Madden by Steve Madden
                                                Cale 6</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Wireless Stereo
                                                Speaker</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">$23.90</li>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-md-30px mb-lm-30px">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Headphones</h2>
                            </div>
                        </div>
                    </div>
                    <div class="category-slider-wraper slider-nav-style-1">

                        <div class="slider-single-item">
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">SoundBox Pro Portable</a>
                                        </h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Madden by Steve Madden
                                                Cale 6</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Wireless Stereo
                                                Speaker</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">$23.90</li>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="slider-single-item">
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/19.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/20.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Silicon Sleeping
                                                Earbuds</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/13.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/14.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Numkuda USB 2.0
                                                Gamepad</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Edifier H840
                                                Audiophile</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Television & Video</h2>
                            </div>
                        </div>
                    </div>
                    <div class="category-slider-wraper slider-nav-style-1 ">

                        <div class="slider-single-item">
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/19.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/20.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Silicon Sleeping
                                                Earbuds</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/13.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/14.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Numkuda USB 2.0
                                                Gamepad</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Edifier H840
                                                Audiophile</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="slider-single-item">
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">SoundBox Pro Portable</a>
                                        </h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Madden by Steve Madden
                                                Cale 6</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- Single Item -->
                            <article class="list-product text-center">
                                <div class="product-inner">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/9.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <h2><a href="single-product.html" class="product-link">Wireless Stereo
                                                Speaker</a></h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">$23.90</li>
                                                <li class="current-price">$21.51</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Catogery slider area End-->
@endsection

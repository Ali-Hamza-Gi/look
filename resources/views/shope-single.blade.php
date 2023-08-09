@extends('layoyts.master')
@section('title')
    Shop
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
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- Shop details Area start -->
    <section class="product-details-area mtb-60px ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-img product-details-tab">
                        <div class="zoompro-wrap zoompro-2">
                            <div class="zoompro-border zoompro-span">
                                <img class="zoompro" src="{{ asset('assets/product_images/'.$product->image) }}" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h2>{{ $product->title }}</h2>
                        <div class="pricing-meta">
                            <ul>
                                <li class="cuttent-price">${{ $product->price }}</li>
                            </ul>
                        </div>
                        <div class="pro-details-list">
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="pro-details-quality mt-0px">
                            <div class="pro-details-cart btn-hover">
                                <a href="#"> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop details Area End -->

    <!-- Arrivals Area Start -->
    <div class="arrival-area single-product-nav mb-20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="section-heading">You May like : </h2>
                    </div>
                </div>
            </div>
            <!-- Arrivel slider start -->
            <div class="arrival-slider-wrapper slider-nav-style-1">
                @foreach ($shuffle_products as $product)
                    <div class="slider-single-item">
                        <!-- Single Item -->
                        <article class="list-product text-center">
                            <div class="product-inner">
                                <div class="img-block">
                                    <a href="{{ route('shope.single.page',$product->slug) }}" class="thumbnail">
                                        <img class="first-img" src="{{ asset('assets/product_images/'.$product->image) }}" alt=""/>
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
                                    <h2><a href="{{ route('shope.single.page',$product->slug) }}" class="product-link">{{ strlen($product->title) > 40 ? substr($product->title, 0, 40) . '...' : $product->title }}</a></h2>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="current-price">${{ $product->price }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <form action="{{ route('product.add.to.cart') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <div class="cart-btn">
                                        <a class="add-to-curt" tabindex="0">Add To Cart</a>
                                    </div>
                                </form>

                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            <!-- Arrivel slider end -->
        </div>
    </div>
    <!-- Arrivals Area End -->
@endsection

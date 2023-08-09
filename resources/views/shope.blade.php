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
    <!-- Shop Category Area End -->
    <div class="shop-category-area mt-30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <div class="shop-tab nav d-flex">
                            <a class="active" href="#shop-1" data-bs-toggle="tab">
                                <i class="fa fa-th"></i>
                            </a>
                            <a href="#shop-2" data-bs-toggle="tab">
                                <i class="fa fa-list"></i>
                            </a>
                        </div>
                        <!-- Left Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area mt-35">
                        <!-- Shop Tab Content Start -->
                        <div class="tab-content jump">
                            <!-- Tab One Start -->
                            <div id="shop-1" class="tab-pane active">
                                <div class="row m-0">
                                    @foreach ($products as $product)
                                        <div class="mb-30px col-md-4 col-lg-3 col-sm-6  p-0">
                                            <div class="slider-single-item">
                                                <!-- Single Item -->
                                                <article class="list-product p-0 text-center">
                                                    <div class="product-inner">
                                                        <div class="img-block">
                                                            <a href="{{ route('shope.single.page',$product->slug) }}" class="thumbnail">
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
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Tab One End -->
                            <!-- Tab Two Start -->
                            <div id="shop-2" class="tab-pane">
                                @foreach ($products as $product)
                                    <div class="shop-list-wrap mb-30px scroll-zoom">
                                        <div class="slider-single-item">
                                            <div class="row list-product m-0px">
                                                <div class="col-md-12 padding-0px product-inner">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                            <div class="left-img">
                                                                <div class="img-block">
                                                                    <a href="{{ route('shope.single.page',$product->slug) }}" class="thumbnail">
                                                                        <img class="first-img" src="{{ asset('assets/product_images/'.$product->image) }}" alt="" style="width: 200px;height:200px" />
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                            <div class="product-desc-wrap">
                                                                <div class="product-decs">
                                                                    <h2><a href="{{ route('shope.single.page',$product->slug) }}"
                                                                            class="product-link">{{ strlen($product->title) > 40 ? substr($product->title, 0, 40) . '...' : $product->title }}</a></h2>
                                                                    <div class="product-intro-info">
                                                                        <p>
                                                                            {!! $product->description !!}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="box-inner d-flex">
                                                                    <div class="align-self-center">
                                                                        <div class="pricing-meta">
                                                                            <ul>
                                                                                <li class="current-price">${{ $product->price }}</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="cart-btn">
                                                                            <a href="#" class="add-to-curt"
                                                                                title="Add to cart">Add to cart</a>
                                                                        </div>
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <!-- Tab Two End -->
                        </div>
                        <!-- Shop Tab Content End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Category Area End -->
@endsection

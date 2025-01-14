

@extends('layouts.main')
@section('main-container')

    <style>
        .product-img img {
            height:270px;
        }
        .category-name-box{
            background: white;
            border-radius: 8px;
            margin-top: 10px;
            font-size: 13px;
            width: 72%;
            display: inline-block;
            position: absolute;
            bottom: 10px;
            left: 15%;
            z-index:1;
        }
        .tile.d-block {
            background:#d3cece;
            border-radius:11%;
            padding:9px 0px;
            height:300px;
            width:300px;
            margin-inline:-30px;
            position:relative;
            img {
                position:absolute;
                left: 0;
                width:-webkit-fill-available;
                height:80%;
            }
        }
    </style>
    @php
        $showPrice = App\Models\Setting::where('name','price_visibility')->first('value')?->value;
        $hotDeals = App\Models\Setting::where('name','hot_deals')->first('value')?->value??'[]';
        $hotDeals = json_decode($hotDeals);
    @endphp

    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">

        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="javascript:void(0)"><img src="img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="javascript:void(0)">Red Hot Tomato</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="javascript:void(0)"><img src="img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="javascript:void(0)">Vegetables Juices</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="javascript:void(0)"><img src="img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="javascript:void(0)">Orange Sliced Mix</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="javascript:void(0)"><img src="img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="javascript:void(0)">Orange Fresh Juice</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="{{route('getIndex')}}">
                        <img src="{{asset('img/logo.png')}}" alt="Logo-transparent">
                    </a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="javascript:void(0)">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="/ozan-cafe/public" target="_blank"> Café </a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>

        </div>
    </div>
        <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title animated">
                                            <img src="{{asset('img/icons/halal.png')}}" style="width:100px;" alt="javascript:void(0)"></h6>
                                        <h1 class="slide-title animated ">Tasty & Healthy <br> Organic Food</h1>
                                        <div class="slide-brief animated d-none">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="img/slider/23.png" alt="javascript:void(0)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                <div class="ltn__slide-item-inner  text-right text-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h6 class="slide-sub-title animated"><img src="img/icons/icon-img/1.png" alt="javascript:void(0)"> 100% genuine Products</h6>
                                        <h1 class="slide-title animated ">Everyday Fresh <br> Veggies</h1>
                                        <!-- <div class="slide-brief animated">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                        <div class="btn-wrapper animated">
                                            <a href="{{route('about')}}" class="btn btn-transparent btn-effect-3 text-uppercase">LEARN MORE</a>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="slide-item-img slide-img-left">
                                @php
                                    $dealImg = App\Models\Setting::where('name','banner_img')->first('value')?->value;
                                @endphp
                                    <img src="{{$dealImg? asset('storage/'.$dealImg): 'img/slider/21.png'}}" alt="javascript:void(0)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area mt-120 mt--90 d-none">
        <div class="container">
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{url('shop')}}"><img src="img/banner/1.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{url('shop')}}"><img src="img/banner/2.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{url('shop')}}"><img src="img/banner/1.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__product-tab-area ltn__product-gutter pt-85 pb-70" id="our-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">Categories</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                        <!--
                        sabse pahle ye jaano ki ye tabs wala work kaise karta hai.
                        jab kisi category par click karte hain to uske andar href="#liton_tab_3_1" isme jo ye `liton_tab_3_1` hai
                        ye ek div ki ID hoti hai .
                        jab  category pr click krte hain to sabhi aise DIVs hide ho jate hain kewal jispr id target wali hoti hai wo show hota hai
                        smjhi ? thik
                        Samajh gyi?hmm
                        thik hai kro fir problem pr btatna ok
                        -->

                        <div class="nav">
                            <a class="active show" href="{{route('shop')}}">
                                <div class="tile d-block" >
                                    <img src="{{asset('img/slider/23.png')}}" height="70" width="70" alt="">
                                    <div class="category-name-box">
                                        <span>Veggies & Fruits</span>
                                    </div>
                                </div>
                            </a>
                            <a href="{{route('shop')}}">
                                <div class="tile d-block" >
                                    <img src="{{asset('img/non-veg.png')}}" height="70" width="70" alt="">
                                    <div class="category-name-box">
                                        <span>Non Veg</span>
                                    </div>
                                </div>
                            </a>
                            <a href="{{route('shop')}}">
                            <div class="tile d-block" >
                                    <img src="{{asset('img/indian.png')}}" height="70" width="70" alt="">
                                    <div class="category-name-box">
                                      <span>Indian Grocery</span>
                                 </div>
                                 </div>
                            </a>
                            <a href="{{route('shop')}}">
                            <div class="tile d-block" >
                                    <img src="{{asset('img/persian.png')}}" height="70" width="70" alt="">
                                    <div class="category-name-box">
                                        <span>Persian Grocery</span>
                                    </div>
                                </div>
                            </a>
                            <a href="{{route('shop')}}">
                            <div class="tile d-block" >
                                    <img src="{{asset('img/turkish.png')}}" height="70" width="70" alt="">
                                    <div class="category-name-box">
                                      <span>Turkish Grocery</span>
                                    </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="tab-content"> <!-- jitne buttons upar hain utne neeche DIVs hain
                        ab yahi par tumhe foreach loop laga dena hai
                        to sabse pahel hame marketproducts table ka saara data yaha par chahiye thik?hhhhhhhhhm
                        fir ye loop chalana hai product ki categorty k base par

                        notice karna ki jo neeche div hain sbhi ka format ek hi hai
                        base data price aur image change hui hai
                        to bas ab whi par loop laga dete hai
                        mai ek par laga dunga baki dekhkr tum sbpr lagana thik ?ok

                        ha nhi to pata lge udhr phone chala rhi idhr
                    -->
                        @php
                            $products = new \App\Models\MarketProduct();
                        @endphp
                        <div style="display:none">
                        <div class="tab-pane fade active "  id="liton_tab_3_1"> <!-- jaise ye -->
                            <div class="ltn__product-tab-content-inner ">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item itna tej kyu chal raha hai? -->
                                    @foreach($products->where('category','veg')->orderBy('created_at')->get() as $product)
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ asset('storage/'.$product->picture)}}" alt="javascript:void(0)"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">

                                                        <ul>
                                                            <li>
                                                                <a href="{{ asset('storage/'.$product->picture)}}" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                    <i class="far fa-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                    <i class="fas fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                    <i class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="javascript:void(0)"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a href="javascript:void(0)">{{$product->title}}</a></h2>
                                                    @if($showPrice)
                                                        <div class="product-price">
                                                            <span>€ {{$product->price}}</span>
                                                            <del>€ 45.5</del>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    @foreach($products->where('category','Non-veg')->orderBy('created_at')->get() as $product)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="javascript:void(0)">
                                                    <img style="height:270px" src="{{asset('storage/'.$product->picture)}}" alt="javascript:void(0)">
                                                </a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">-19%</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                                        <li class="review-total"> <a href="javascript:void(0)"> (24)</a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="javascript:void(0)">{{$product->title}}</a></h2>
                                                @if($showPrice)
                                                <div class="product-price">
                                                    <span>€ {{$product->price}}</span>
                                                    @if($product->discount)
                                                    <del>€ 46.00</del>
                                                    @endif
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                @foreach($products->where('category','Indian-grocery')->orderBy('created_at')->get() as $product)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="javascript:void(0)">
                                                    <img style="height:270px" src="{{asset('storage/'.$product->picture)}}" alt="javascript:void(0)">
                                                </a>
                                                @if($product->discount)
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">-19%</li>
                                                    </ul>
                                                </div>
                                                @endif
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                                        <li class="review-total"> <a href="javascript:void(0)"> (24)</a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="javascript:void(0)">{{$product->title}}</a></h2>
                                                @if($showPrice)
                                                <div class="product-price">
                                                    <span>€ {{$product->price}}</span>
                                                    @if($product->discount)
                                                    <del>€ 46.00</del>
                                                    @endif
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                @foreach($products->where('category','Persian-grocery')->orderBy('created_at')->get() as $product)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="javascript:void(0)">
                                                    <img style="height:270px" src="{{asset('storage/'.$product->picture)}}" alt="javascript:void(0)">
                                                </a>
                                                @if($product->discount)
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">-19%</li>
                                                    </ul>
                                                </div>
                                                @endif
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                                        <li class="review-total"> <a href="javascript:void(0)"> (24)</a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="javascript:void(0)">{{$product->title}}</a></h2>
                                                @if($showPrice)
                                                <div class="product-price">
                                                    <span>€ {{$product->price}}</span>
                                                    @if($product->discount)
                                                        <del> € 46.00</del>
                                                    @endif
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_5">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                @foreach($products->where('category','Turkish-grocery')->orderBy('created_at')->get() as $product)
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="javascript:void(0)">
                                                    <img style="height:270px" src="{{asset('storage/'.$product->picture)}}" alt="javascript:void(0)">
                                                </a>
                                                @if($product->discount)
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">-19%</li>
                                                    </ul>
                                                </div>
                                                @endif
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                                        <li class="review-total"> <a href="javascript:void(0)"> (24)</a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="javascript:void(0)">{{$product->title}}</a></h2>
                                                @if($showPrice)
                                                <div class="product-price">
                                                    <span>€ {{$product->price}}</span>
                                                    @if($product->discount)
                                                    <del>€ 46.00</del>
                                                    @endif
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->
    @if(count($hotDeals))
    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-second-active slick-slide-arrow-1 slick-slide-dots-1">
            @foreach ($hotDeals as $deal)
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
                    <div class="ltn__slide-item-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="{{asset('storage/'.$deal->image)}}" alt="javascript:void(0)">
                                </div>
                                <div class="col-lg-7">
                                    <div class="call-to-action-inner call-to-action-inner-4 text-color-white--- text-center---">
                                        <div class="section-title-area ltn__section-title-2 text-center---">
                                            <h1 class="ltn__secondary-color">Todays Hot Deals</h1>
                                            <h1 class="section-title">
                                                {{$deal->text}}
                                            </h1>
                                        </div>
                                        <div class="ltn__countdown ltn__countdown-3 bg-white--" data-countdown="2025/01/01"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- PRODUCT AREA START (product-item-3) -->
    <div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">Featured Products</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                <!-- ltn__product-item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-left">
                        <div class="product-img">
                            <a href="javascript:void(0)"><img src="img/product/1.png" alt="javascript:void(0)"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">New</li>
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="javascript:void(0)">Carrots Group Scal</a></h2>
                            @if($showPrice)
                            <div class="product-price">
                                <span>$32.00</span>
                                <del>$46.00</del>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-left">
                        <div class="product-img">
                            <a href="javascript:void(0)"><img src="img/product/2.png" alt="javascript:void(0)"></a>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="javascript:void(0)">Red Hot Tomato</a></h2>
                            @if($showPrice)
                            <div class="product-price">
                                <span>$25.00</span>
                                <del>$35.00</del>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="javascript:void(0)"><img src="{{asset('img/product/3.png')}}" alt="javascript:void(0)"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">New</li>
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="javascript:void(0)">Orange Fresh Juice</a></h2>
                            @if($showPrice)
                            <div class="product-price">
                                <span>$75.00</span>
                                <del>$92.00</del>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="javascript:void(0)"><img src="{{asset('img/product/4.png')}}" alt="javascript:void(0)"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">New</li>
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="javascript:void(0)">Poltry Farm Meat</a></h2>
                            @if($showPrice)
                            <div class="product-price">
                                <span>$78.00</span>
                                <del>$85.00</del>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- PRODUCT AREA END -->

    <!-- VIDEO AREA START -->
    <div class="ltn__video-popup-area ltn__video-popup-margin d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__video-bg-img ltn__video-popup-height-600 bg-overlay-black-10-- bg-image" data-bg="{{asset('img/images/L.jpeg')}}">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VIDEO AREA END -->

    <div class="ltn__testimonial-area section-bg-1 pt-290 pb-70 d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">//  Testimonials</h6>
                        <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="{{asset('img/testimonial/6.jpg')}}" alt="javascript:void(0)">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="{{asset('img/testimonial/7.jpg')}}" alt="javascript:void(0)">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="{{asset('img/testimonial/1.jpg')}}" alt="javascript:void(0)">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="{{asset('img/testimonial/2.jpg')}}" alt="javascript:void(0)">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-4">
                        <div class="ltn__testimoni-img">
                            <img src="{{asset('img/testimonial/5.jpg')}}" alt="javascript:void(0)">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <h4>Rosalina D. William</h4>
                            <h6>Founder</h6>
                        </div>
                        <div class="ltn__testimoni-bg-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__blog-area pt-115 pb-70 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Leatest Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="javascript:void(0)"><img src="{{asset('img/images/L.jpeg')}}" alt="javascript:void(0)"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="javascript:void(0)"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="javascript:void(0)"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="javascript:void(0)">Common Engine Oil Problems and Solutions</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="javascript:void(0)">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="javascript:void(0)"><img src="{{asset('img/images/g.jpeg')}}" alt="javascript:void(0)"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="javascript:void(0)"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="javascript:void(0)"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="javascript:void(0)">How and when to replace brake rotors</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="javascript:void(0)">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="javascript:void(0)"><img src="{{asset('img/images/x.jpeg')}}" alt="javascript:void(0)"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="javascript:void(0)"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="javascript:void(0)"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="javascript:void(0)">Elenance, Servicing & Repairs</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>August 22, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="javascript:void(0)">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="javascript:void(0)"><img src="{{asset('img/images/d.jpeg')}}" alt="javascript:void(0)"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="javascript:void(0)"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="javascript:void(0)"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="javascript:void(0)">Healthiest Vegetables on Earth</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="javascript:void(0)">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="javascript:void(0)"><img src="{{asset('img/images/L.jpeg')}}" alt="javascript:void(0)"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="javascript:void(0)"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="javascript:void(0)"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="javascript:void(0)">How te Your Tires Last Longer</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="javascript:void(0)">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </div>

    @endsection

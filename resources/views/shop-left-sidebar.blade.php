

@extends('layouts.main')
@section('main-container')

    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/1.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Red Hot Tomato</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/2.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Vegetables Juices</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/3.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Orange Sliced Mix</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="#"><img src="img/product/4.png" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="#">Orange Fresh Juice</a></h6>
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
                    <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="{{route('getIndex')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('shop-left-sidebar')}}">Shop</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9---" data-bg="{{asset('img/bg/9.jpg')."?as"}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Welcome to Ozan</h6>
                            <h1 class="section-title white-color">Shop</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('getIndex')}}">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- BREADCRUMB AREA END -->
     
    <a class="btn btn-success position-absolute" style="right:10px;" href="{{route('createproduct')}}" >Create Product</a>


    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-2 mb-120">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                               <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option>Default sorting</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by new arrivals</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                               <div class="showing-product-number text-right text-end">
                                    <span>Showing 9 of 20 results</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/e.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/f.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                                <div class="product-price">
                                                    <span>$62.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src= "{{asset('img/images/g.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">Hot</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                    <del>$92.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/h.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                <div class="product-price">
                                                    <span>$78.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/x.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">Sell -25%</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/i.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                <div class="product-price">
                                                    <span>$152.00</span>
                                                    <del>$158.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/x.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/j.jpeg')}}"alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                                <div class="product-price">
                                                    <span>$62.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/L.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                    <del>$92.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/x.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">Sell</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                <div class="product-price">
                                                    <span>$78.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/x.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/b.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/c.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/d.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                                <div class="product-price">
                                                    <span>$62.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/L.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Orange Fresh Juice</a></h2>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                    <del>$92.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/h.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                <div class="product-price">
                                                    <span>$78.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/L.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/x.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/vegies.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Fresh Butter Cake</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/h.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/x.jpeg')}}" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{asset('img/images/Fresh_vegeis.jpeg')}}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                                <div class="product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Poltry Farm Meat</a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                                <div class="product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Vegetables Juices</a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                                <div class="product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product/4.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                                <div class="product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product/5.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">Hot</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                                <div class="product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product/6.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Orange Sliced Mix</a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                                <div class="product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="img/product/4.png" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details.html">Red Hot Tomato</a></h2>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$165.00</span>
                                                    <del>$1720.00</del>
                                                </div>
                                                <div class="product-brief">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae asperiores sit odit nesciunt,  aliquid, deleniti non et ut dolorem!</p>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  mb-120">
                    <aside class="sidebar ltn__shop-sidebar">
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                            <ul>
                                <li><a href="#">Body <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Interior <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Lights <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Parts <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Tires <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Uncategorized <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li><a href="#">Wheel <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!-- Price Filter Widget -->
                        <div class="widget ltn__price-filter-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Filter by price</h4>
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit"  value="Your range:"/>
                                    <input type="text" class="amount" name="price"  placeholder="Add Your Price" />
                                </div>
                                <div class="slider-range"></div>
                            </div>
                        </div>
                        <!-- Top Rated Product Widget -->
                        <div class="widget ltn__top-rated-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                            <ul>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Mixel Solid Seat Cover</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Vegetables Juices</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h6><a href="product-details.html">Coil Spring Conversion</a></h6>
                                            <div class="product-price">
                                                <span>$49.00</span>
                                                <del>$65.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Search Widget -->
                        <div class="widget ltn__search-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                            <form action="#">
                                <input type="text" name="search" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <!-- Tagcloud Widget -->
                        <div class="widget ltn__tagcloud-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Popular Tags</h4>
                            <ul>
                                <li><a href="#">Popular</a></li>
                                <li><a href="#">desgin</a></li>
                                <li><a href="#">ux</a></li>
                                <li><a href="#">usability</a></li>
                                <li><a href="#">develop</a></li>
                                <li><a href="#">icon</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Repairs</a></li>
                                <li><a href="#">Auto Parts</a></li>
                                <li><a href="#">Oil</a></li>
                                <li><a href="#">Dealer</a></li>
                                <li><a href="#">Oil Change</a></li>
                                <li><a href="#">Body Color</a></li>
                            </ul>
                        </div>
                        <!-- Size Widget -->
                        <div class="widget ltn__tagcloud-widget ltn__size-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product Size</h4>
                            <ul>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>
                        <!-- Color Widget -->
                        <div class="widget ltn__color-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product Color</h4>
                            <ul>
                                <li class="black"><a href="#"></a></li>
                                <li class="white"><a href="#"></a></li>
                                <li class="red"><a href="#"></a></li>
                                <li class="silver"><a href="#"></a></li>
                                <li class="gray"><a href="#"></a></li>
                                <li class="maroon"><a href="#"></a></li>
                                <li class="yellow"><a href="#"></a></li>
                                <li class="olive"><a href="#"></a></li>
                                <li class="lime"><a href="#"></a></li>
                                <li class="green"><a href="#"></a></li>
                                <li class="aqua"><a href="#"></a></li>
                                <li class="teal"><a href="#"></a></li>
                                <li class="blue"><a href="#"></a></li>
                                <li class="navy"><a href="#"></a></li>
                                <li class="fuchsia"><a href="#"></a></li>
                                <li class="purple"><a href="#"></a></li>
                                <li class="pink"><a href="#"></a></li>
                                <li class="nude"><a href="#"></a></li>
                                <li class="orange"><a href="#"></a></li>

                                <li><a href="#" class="orange"></a></li>
                                <li><a href="#" class="orange"></a></li>
                            </ul>
                        </div>
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html"><img src="img/banner/banner-1.jpg" alt="#"></a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    <div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/icon-img/11.png" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Curated Products</h4>
                                        <p>Provide Curated Products for
                                            all product over $100</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/icon-img/12.png" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Handmade</h4>
                                        <p>We ensure the product quality
                                            that is our main goal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/icon-img/13.png" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Natural Food</h4>
                                        <p>Return product within 3 days
                                            for any product you buy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="ltn__feature-item ltn__feature-item-8">
                                    <div class="ltn__feature-icon">
                                        <img src="img/icons/icon-img/14.png" alt="#">
                                    </div>
                                    <div class="ltn__feature-info">
                                        <h4>Free home delivery</h4>
                                        <p>We ensure the product quality
                                            that you can trust easily</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->


@endsection

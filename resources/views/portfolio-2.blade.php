

@extends('layouts.main')
@section('main-container')


    <!-- Gallery area start -->
    <div class="ltn__gallery-area mb-120">
        <div class="container">
            <!--
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__gallery-menu">
                        <div class="ltn__gallery-filter-menu portfolio-filter text-uppercase mb-50">
                            <button data-filter="*" class="active">all</button>
                            <button data-filter=".filter_category_1">White</button>
                            <button data-filter=".filter_category_2">Red</button>
                            <button data-filter=".filter_category_3">Black</button>
                        </div>
                    </div>
                </div>
            </div>
            -->

            <!--Portfolio Wrapper Start-->
            <div class="ltn__gallery-active row ltn__gallery-style-1">
                <div class="ltn__gallery-sizer col-1"></div>

                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/1.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_2 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_1" data-rel="lightcase:myCollection">
                                <img src="img/gallery/2.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Inline Description </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_1 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="//www.youtube.com/embed/6v2L2UGZJAM?version=3" data-rel="lightcase:myCollection">
                                <img src="img/gallery/3.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fab fa-youtube"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Youtube Video </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="//player.vimeo.com/video/49583118?version=3" data-rel="lightcase:myCollection">
                                <img src="img/gallery/4.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fab fa-vimeo-v"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Vimeo Video </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_2 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="media/1.mp4" data-rel="lightcase:myCollection">
                                <img src="img/gallery/5.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-video"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">HTML5 Video </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_1 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1575.9076122223137!2d144.96590401578402!3d-37.81779982944919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b6af832249%3A0xe39e415e49a7c44e!2sFlinders%20Street%20Railway%20Station!5e0!3m2!1sen!2sbd!4v1598113544515!5m2!1sen!2sbd" data-rel="lightcase:myCollection">
                                <img src="img/gallery/6.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Google Map </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection" data-lc-caption="Your caption Here">
                                <img src="img/gallery/7.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fab fa-acquisitions-incorporated"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Image Caption </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_2 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/no-image.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/8.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-not-equal"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Not Found</a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_1 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/9.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_3 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/10.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_2 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/1.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
                <!-- gallery-item -->
                <div class="ltn__gallery-item filter_category_1 col-md-4 col-sm-6 col-12">
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="img/gallery/1.jpg" data-rel="lightcase:myCollection">
                                <img src="img/gallery/2.jpg" alt="Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="fas fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="ltn__gallery-item-info">
                            <h4><a href="portfolio-details.html">Portfolio Link </a></h4>
                            <p>Web Design & Development, Branding</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ltn__inline_description_1" style="display: none;">
                <h4 class="first">This content comes from a hidden element on that page</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor.</p>
                <p>Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel.</p>
            </div>

            <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-transparent btn-effect-1 btn-border">LOAD MORE +</a>
            </div>

            <!-- pagination start -->
            <!--
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__pagination text-center margin-top-50">
                        <ul>
                            <li class="arrow-icon"><a href="#"> &leftarrow; </a></li>
                            <li class="active"><a href="blog.html">1</a></li>
                            <li><a href="blog-2.html">2</a></li>
                            <li><a href="blog-2.html">3</a></li>
                            <li><a href="blog-2.html">...</a></li>
                            <li><a href="blog-2.html">10</a></li>
                            <li class="arrow-icon"><a href="#"> &rightarrow; </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            -->
            <!-- pagination end -->

        </div>
    </div>
    <!-- Gallery area end -->

    <!-- CALL TO ACTION START (call-to-action-4) -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120" data-bg="img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-center">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  any question you have  //</h6>
                            <h1 class="section-title white-color">897-876-987-90</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a href="tel:+123456789" class="theme-btn-1 btn btn-effect-1">MAKE A CALL</a>
                            <a href="contact.html" class="btn btn-transparent btn-effect-3 white-color">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__call-to-4-img-1">
            <img src="img/bg/12.png" alt="#">
        </div>
        <div class="ltn__call-to-4-img-2">
            <img src="img/bg/11.png" alt="#">
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- BLOG AREA START (blog-3) -->
    <div class="ltn__blog-area pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Leatest Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/1.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Common Engine Oil Problems and Solutions</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/2.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">How and when to replace brake rotors</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/3.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Elenance, Servicing & Repairs</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>August 22, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/4.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">He for your First Track Day!</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/5.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">How te Your Tires Last Longer</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->

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

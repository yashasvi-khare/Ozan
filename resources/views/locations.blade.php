

@extends('layouts.main')
@section('main-container')




    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image mb-0" data-bg="{{asset('img/bg/9.jpg')."?as"}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Welcome to Ozan</h6>
                            <h1 class="section-title white-color">Google Map Locations</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('getIndex')}}">Home</a></li>
                                <li>Locations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->


    <!-- GOOGLE MAP LOCATIONS AREA START -->
    <div class="ltn__google-map-locations-area">
        <div id="gmap"></div>
    </div>
    <!-- GOOGLE MAP LOCATIONS AREA END -->

    <div class="ltn__google-map-locations-list-area mt-115 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__location-search mb-100">
                        <div class="section-title-area ltn__section-title-2 ">
                            <h1 class="section-title">Find your nearby location<span>.</span></h1>
                        </div>
                        <form action="#" class="clearfix">
                            <h3>Your State</h3>
                            <div class="input-item">
                                <select class="nice-select">
                                    <option>Make A Selection</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__state-location">
                        <h2 class="ltn__state-location-title">Alabama</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ltn__state-location">
                        <h2 class="ltn__state-location-title">Boston</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ltn__state-location">
                        <h2 class="ltn__state-location-title">New York</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Boston, New York</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="contact.html" class="btn btn-transparent btn-border btn-effect-4"><i class="fas fa-location-arrow"></i> Get An Appointment</a>
                            <a href="#" class="btn btn-transparent btn-border btn-effect-3"><i class="fas fa-globe"></i> View Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

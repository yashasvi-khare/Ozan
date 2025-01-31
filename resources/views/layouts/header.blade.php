
<style>
    .site-logo img{ padding-top: 30px;}
</style>
<!-- HEADER AREA START (header-5) -->
<header class="ltn__header-area ltn__header-5 ltn__header-transparent gradient-color-4---">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                            <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right  text-end">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__language-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                        <ul>
                                            <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                <ul>
                                                    <li><a href="#">Arabic</a></li>
                                                    <li><a href="#">Bengali</a></li>
                                                    <li><a href="#">Chinese</a></li>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Hindi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(!in_array( request()->route()->uri, ['/', 'getIndex']) )
        <style>
            .header-menu .ltn__main-menu ul > li > a {color:white};
        </style>
    @endif

    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option sticky-active-into-mobile--- plr--9---">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo-wrap">
                        <div class="site-logo">
                            <a href="{{url('/')}}" class="position-relative">
                                <img src="{{asset('img/logo.png')}}" height="400" alt="Logo" class="position-absolute">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col header-menu-column menu-color-white---">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li class="menu-icon"><a href="{{route('getIndex')}}">Home</a></li>
                                    <li class="menu-icon"><a target="_blank" href="/ozan-cafe/public">Café</a></li>
                                    <li class="menu-icon"><a href="{{route('shop')}}">Products</a></li>
                                    <li class="menu-icon"><a href="{{route('about')}}">About</a></li>

                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="ltn__header-options ltn__header-options-2">
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>
<!-- HEADER AREA END -->
<style>
    .sticky-active .site-logo img {
        padding-top: 0;
        left: 0;
        height: 200px;
    }
</style>

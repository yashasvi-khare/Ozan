<aside class="left-sidebar">
    <!-- jo changes kiye hai maine unko dekhkr samajh lo
    aage bhut use hoga,
    ok
    -->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{url('admin/dashboard')}}" class="text-nowrap logo-img">
                <img src="{{asset('img/logo.png')}}" width="100" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{url('/')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">MENUS</span>
                </li>
                <!-- sabhi menus ko comment karke kewal ek menu rakkho Products
        aage jo problem aaye batana
        + jitne changes maine kiya usko dhyaan se samajh lo
        -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.products')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Products</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('admin.settings')}}" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Settings</span>
                    </a>
                </li>
            </ul>
    </div>
    </nav>
    </div>
</aside>

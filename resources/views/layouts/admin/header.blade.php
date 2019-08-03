<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard Admin Clean Blog</title>
    <link rel="icon" type="image/x-icon" href="{{asset('media/logo.png')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="css/cleandash.css">
</head>

<body>
    <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow px-15">
                    <!-- Mini Mode -->
                    <div class="content-header-section sidebar-mini-visible-b">
                        <!-- Logo -->
                        <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                            <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                        </span>
                        <!-- END Logo -->
                    </div>
                    <!-- END Mini Mode -->

                    <!-- Normal Mode -->
                    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Sidebar -->

                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="/dashboard">
                                <i class="text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">clean</span><span class="font-size-xl text-primary">blog</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Normal Mode -->
                </div>
                <!-- END Side Header -->
                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                    <li class="nav-main-heading">
                            <span class="sidebar-mini-hidden">Main Navigation</span></li>
                        <li>
                        <li>
                            <a class="active" href="/dashboard">
                                <i class="si si-cup"></i>
                                <span class="sidebar-mini-hide">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-docs"></i>
                                <span class="sidebar-mini-hide">Pages</span></a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">View Pages</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">Add New Pages</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-note"></i>
                                <span class="sidebar-mini-hide">Articles</span></a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">View Articles</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">Add New Articles</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">Categories</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">Tags</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/dashboard">
                                <i class="si si-picture"></i>
                                <span class="sidebar-mini-hide">Media</span></a>
                        </li>
                        <li>
                            <a href="/dashboard">
                                <i class="si si-bubbles"></i>
                                <span class="sidebar-mini-hide">Comments</span></a>
                        </li>
                        <li class="nav-main-heading">
                            <span class="sidebar-mini-hidden">System</span></li>
                            @if(auth()->user()->isAdmin == 1 )
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-settings"></i>
                                <span class="sidebar-mini-hide">Setting</span></a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">General Settings</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">Social Media Settings</span></a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-diamond"></i>
                                <span class="sidebar-mini-hide">Themes</span></a>
                            <ul>
                            <li>
                                <a href="#">
                                        <span class="sidebar-mini-hide">View Theme</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">Menus</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">Widgets</span></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini-hide">Theme Options</span></a>
                                </li>
                            </ul>
                        </li>
                        @if(auth()->user()->isAdmin == 1 )
                        <li>
                            <a href="/dashboard">
                                <i class="si si-puzzle"></i>
                                <span class="sidebar-mini-hide">Plugins</span></a>
                        </li>
                        @endif
                        <li>
                            <a href="/dashboard">
                                <i class="si si-feed"></i>
                                <span class="sidebar-mini-hide">Sitemap</span></a>
                        </li>
                        <li>
                            <a href="/dashboard">
                                <i class="si si-notebook"></i>
                                <span class="sidebar-mini-hide">Documentation</span></a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- Sidebar Content -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                    <!-- END Toggle Sidebar -->
                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                        <i class="fa fa-search"></i>
                    </button>
                    <!-- END Open Search Section -->
                    
                <!-- END Live View -->
                    <!-- Layout Options (used just for demonstration) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                            <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings Theme</h5>
                            <h6 class="dropdown-header">Color Themes</h6>
                            <div class="row no-gutters text-center mb-5">
                                <div class="col-2 mb-5">
                                    <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-elegance" data-toggle="theme" data-theme="css/themes/elegance.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-pulse" data-toggle="theme" data-theme="css/themes/pulse.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-flat" data-toggle="theme" data-theme="css/themes/flat.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-corporate" data-toggle="theme" data-theme="css/themes/corporate.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-earth" data-toggle="theme" data-theme="css/themes/earth.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <h6 class="dropdown-header">Header</h6>
                            <div class="row gutters-tiny text-center mb-5">
                                <div class="col-6">
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                </div>
                            </div>
                            <h6 class="dropdown-header">Sidebar</h6>
                            <div class="row gutters-tiny text-center mb-5">
                                <div class="col-6">
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                                </div>
                            </div>
                            <div class="d-none d-xl-block">
                          <h6 class="dropdown-header">Main Content</h6>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                            </div>
                        </div>
                    </div>
                    <!-- END Layout Options -->
                </div>
                <!-- END Left Section -->
                
                <!-- Right Section -->
                <div class="content-header-section">
                    <!-- Live Views -->
                    <button type="button" class="btn btn-circle btn-dual-secondary">
                    <a href="http://localhost:8000" title="Live View" target="_blank" style="color: black;"><i class="si si-globe"></i></a>
                    </button>
                    <!-- User Dropdown -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
                            <i class="fa fa-angle-down ml-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                        @if(auth()->user()->isAdmin == 1 )
                            <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">Administrator</h5>
                        @else
                            <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">Member</h5>
                        @endif
                            <a class="dropdown-item" href="be_pages_generic_profile.html">
                                <i class="si si-user mr-5"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="si si-logout mr-5"></i>
                                Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header">
                <div class="content-header content-header-fullrow">
                    <form action="be_pages_generic_search.html" method="post">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Close Search Section -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-times"></i>
                                </button>
                                <!-- END Close Search Section -->
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Activity page under Elements category to see examples
                of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->
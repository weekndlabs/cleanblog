@extends('layouts.admin.layout')

@section('content')
<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
        <div class="row gutters-tiny invisible" data-toggle="appear">
            <!-- Row #1 -->
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="javascript:void(0)">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                        <div class="ribbon-box">750</div>
                        <p class="mt-5">
                            <i class="si si-book-open fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Articles</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="javascript:void(0)">
                    <div class="block-content bg-gd-primary">
                        <p class="mt-5">
                            <i class="si si-plus fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">New Article</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="be_pages_forum_categories.html">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                        <div class="ribbon-box">16</div>
                        <p class="mt-5">
                            <i class="si si-bubbles fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Comments</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="be_pages_generic_search.html">
                    <div class="block-content bg-gd-lake">
                        <p class="mt-5">
                            <i class="si si-magnifier fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Search</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="be_comp_charts.html">
                    <div class="block-content bg-gd-emerald">
                        <p class="mt-5">
                            <i class="si si-bar-chart fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Statistics</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="javascript:void(0)">
                    <div class="block-content bg-gd-corporate">
                        <p class="mt-5">
                            <i class="si si-settings fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Settings</p>
                    </div>
                </a>
            </div>
            <!-- END Row #1 -->
        </div>
        <div class="row row-deck gutters-tiny invisible" data-toggle="appear">
            <!-- Row #2 -->
            <div class="col-xl-4">
                <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('media/photos/photo24@2x.jpg');">
                    <div class="block-content block-sticky-options pt-100 bg-black-op">
                        <div class="block-options block-options-left text-white">
                            <div class="block-options-item">
                                <i class="si si-book-open text-white-op"></i>
                            </div>
                        </div>
                        <div class="block-options text-white">
                            <div class="block-options-item">
                                <i class="si si-bubbles"></i> 15
                            </div>
                            <div class="block-options-item">
                                <i class="si si-eye"></i> 3800
                            </div>
                        </div>
                        <h2 class="h3 font-w700 text-white mb-5">Travel the world</h2>
                        <h3 class="h5 text-white-op">Explore and achieve great things</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('media/photos/photo32@2x.jpg');">
                    <div class="block-content block-sticky-options pt-100 bg-primary-dark-op">
                        <div class="block-options block-options-left text-white">
                            <div class="block-options-item">
                                <i class="si si-book-open text-white-op"></i>
                            </div>
                        </div>
                        <div class="block-options text-white">
                            <div class="block-options-item">
                                <i class="si si-bubbles"></i> 4
                            </div>
                            <div class="block-options-item">
                                <i class="si si-eye"></i> 1680
                            </div>
                        </div>
                        <h2 class="h3 font-w700 text-white mb-5">Inspiring Solutions</h2>
                        <h3 class="h5 text-white-op">10 things you should do today</h3>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('media/photos/photo10@2x.jpg');">
                    <div class="block-content block-sticky-options pt-100 bg-primary-op">
                        <div class="block-options block-options-left text-white">
                            <div class="block-options-item">
                                <i class="si si-book-open text-white-op"></i>
                            </div>
                        </div>
                        <div class="block-options text-white">
                            <div class="block-options-item">
                                <i class="si si-bubbles"></i> 16
                            </div>
                            <div class="block-options-item">
                                <i class="si si-eye"></i> 4450
                            </div>
                        </div>
                        <h2 class="h3 font-w700 text-white mb-5">Alternative Road</h2>
                        <h3 class="h5 text-white-op">Don't let anything disorient you</h3>
                    </div>
                </a>
            </div>
            <!-- END Row #2 -->

            <div class="col-xl-8 d-flex align-items-stretch">
                            <div class="block block-themed block-mode-loading-inverse block-transparent bg-image w-100" style="background-image: url('media/photos/photo34@2x.jpg');">
                                <div class="block-header bg-black-op">
                                    <h3 class="block-title">
                                        Sales <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content bg-black-op">
                                    <div class="pull-r-l"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-dashboard-lines chartjs-render-monitor" width="742" height="371" style="display: block; width: 742px; height: 371px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="block block-transparent bg-primary-dark d-flex align-items-center w-100">
                                <div class="block-content block-content-full">
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-book-open fa-2x text-success"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-success js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="750">750</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-success-light">Articles</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-wallet fa-2x text-danger"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-danger">$<span data-toggle="countTo" data-speed="1000" data-to="980" class="js-count-to-enabled">980</span></div>
                                        <div class="font-size-sm font-w600 text-uppercase text-danger-light">Earnings</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-envelope-open fa-2x text-warning"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-warning js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="38">38</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-warning-light">Messages</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix border-black-op-b">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-users fa-2x text-info"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-info js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="260">260</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-info-light">Online</div>
                                    </div>
                                    <div class="py-15 px-20 clearfix">
                                        <div class="float-right mt-15 d-none d-sm-block">
                                            <i class="si si-drop fa-2x text-elegance"></i>
                                        </div>
                                        <div class="font-size-h3 font-w600 text-elegance js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="59">59</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-elegance-light">Themes</div>
                                    </div>
                                </div>
                            </div>
                        </div>

    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

@endsection
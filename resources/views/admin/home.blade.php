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
                    <div class="block-content bg-gd-dusk">
                        <p class="mt-5">
                            <i class="si si-plus fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">New Article</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="javascript:void(0)">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-primary">
                        <div class="ribbon-box">750</div>
                        <p class="mt-5">
                            <i class="si si-book-open fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Articles</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="be_pages_forum_categories.html">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                        <div class="ribbon-box">16</div>
                        <p class="mt-5">
                            <i class="si si-docs fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Pages</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="be_pages_generic_search.html">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-lake">
                        <div class="ribbon-box">20</div>
                        <p class="mt-5">
                            <i class="si si-bubbles fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Comments</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="be_comp_charts.html">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-emerald">
                        <div class="ribbon-box">2</div>
                        <p class="mt-5">
                            <i class="si si-diamond fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Themes</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center" href="javascript:void(0)">
                    <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-corporate">
                        <div class="ribbon-box">12</div>
                        <p class="mt-5">
                            <i class="si si-people fa-3x text-white-op"></i>
                        </p>
                        <p class="font-w600 text-white">Users</p>
                    </div>
                </a>
            </div>
            <!-- END Row #1 -->
        </div>
        <h3 class="content-heading">
            <i class="si si-fire text-muted mr-5"></i>Trending Articles
        </h3>
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
            <div class="col-xl-4">
                <a class="block block-transparent bg-image d-flex align-items-stretch" href="javascript:void(0)" style="background-image: url('media/photos/photo10@2x.jpg');">
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
                        <h2 class="h3 font-w700 text-white mb-5">Alternative Road</h2>
                        <h3 class="h5 text-white-op">Don't let anything disorient you</h3>
                    </div>
                </a>
            </div>
            <!-- END Row #2 -->
        </div>
        <h3 class="content-heading">
            <i class="si si-chart text-muted mr-5"></i>Site Analytics
        </h3>

        <div class="row invisible" data-toggle="appear">
            <!-- Row #3 -->
            <div class="col-md-12">
                <div class="block block-themed block-mode-loading-refresh">
                    <div class="block-header bg-primary">
                        <h3 class="block-title">
                            Visitor <small>This week</small>
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="pull-all">
                            <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                            <canvas class="js-chartjs-dashboard-lines"></canvas>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row items-push">
                            <div class="col-6 col-sm-4 text-center text-sm-left">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                <div class="font-size-h4 font-w600">720</div>
                                <div class="font-w600 text-success">
                                    <i class="si si-people"></i> Visitor
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 text-center text-sm-left">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                <div class="font-size-h4 font-w600">160</div>
                                <div class="font-w600 text-success">
                                    <i class="si si-people"></i> Visitor
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-left">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                                <div class="font-size-h4 font-w600">24</div>
                                <div class="font-w600 text-success">
                                    <i class="si si-people"></i> Visitor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Row #3 -->
        </div>
        <!-- END Page Content -->
</main>
<!-- END Main Container -->

@endsection
@extends('layouts.layout')

@section('content')
<main id="page-content">
    <div class="bg-img">
        <div class="bg-img-bg">
            <div class="container c-full text-center">
                <h1 class="page-heading">Clean Blog</h1>
                <h2 class="page-subheading mb-0">
                    <a href="https://github.com/weekndlabs">A Blog Theme by WeekndLabs</a>
                </h2>
            </div>
        </div>
    </div>

    <div class="bg-light">
        <div class="container c-full">
            <div class="row no-gutters py-3">
                <div class="col-lg-6 col-xl-5 d-lg-flex align-items-lg-center bg-white">
                    <div class="p-4 p-lg-0">
                        <a class="img-link img-link-fx-out" href="/lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit">
                            <img class="img-link-media img-fluid" src="/media/posts/1548238453.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                            <div class="img-link-meta d-flex align-items-center justify-content-center">
                                <i class="fad fa-fw fa-2x fa-share"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 d-lg-flex align-items-lg-center bg-white">
                    <div class="px-4 px-lg-5 pb-4 pt-lg-4">
                        <h3 class="h2 mb-1">
                            <a class="font-weight-700 text-dark" href="/lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                        </h3>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Sed ac neque malesuada, ultrices tellus eu, sollicitudin nulla. 
                        Cras suscipit maximus nisl, quis porttitor nibh ornare sed. 
                        Vivamus sit amet tempor quam. 
                        Praesent mattis odio id maximus vehicula....
                        </p>
                        <p class="text-muted mb-2 font-size-sm">
                            <strong>John Boris</strong>
                            <br>
                            <strong>Jan 23, 2019</strong>
                            &middot; 4 min read
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
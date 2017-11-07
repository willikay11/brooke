@extends('frontend.layouts.default')

@section('content')

    <div class="container-fluid">
        <div class="row homepage-slider">
            <div class="col-sm-12 col-sm-offset-1 col-sm-11 col-lg-offset-1 col-lg-11 vertical_center">
                <div class="slider-content">
                    <p class="slider-content-header">Brooke Consult</p>
                    <p class="slider-content-text">Real Estate consulting is our <span class="red">sport</span></p>
                    <a class="slider-content-link" href="#">Learn more about the firm</a>
                </div>
            </div>
        </div>

        <div class="row homepage-quadrant row-no-padding">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="homepage-quarter section-left" style="background-image: url('/img/card-1.png');">
                        <div class="homepage-container">
                            <div class="homepage-quarter-content vertical_center" style="text-align: center">
                                <p class="homepage-quarter-content-header">Construction Management</p>
                                <p class="homepage-quarter-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class="homepage-quarter-content-link" href="#">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="homepage-quarter section-right" style="background-image: url('/img/card-2.jpg');">
                        <div class="homepage-container">
                            <div class="homepage-quarter-content vertical_center" style="text-align: center">
                                <p class="homepage-quarter-content-header">Construction Management</p>
                                <p class="homepage-quarter-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class="homepage-quarter-content-link" href="#">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="homepage-quarter section-left" style="background-image: url('/img/card-3.jpg');">
                        <div class="homepage-container">
                            <div class="homepage-quarter-content vertical_center" style="text-align: center">
                                <p class="homepage-quarter-content-header">Construction Management</p>
                                <p class="homepage-quarter-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class="homepage-quarter-content-link" href="#">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="homepage-quarter section-right" style="background-image: url('/img/card-4.jpg');">
                        <div class="homepage-container">
                            <div class="homepage-quarter-content vertical_center" style="text-align: center">
                                <p class="homepage-quarter-content-header">Construction Management</p>
                                <p class="homepage-quarter-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class="homepage-quarter-content-link" href="#">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12 blogs-container">
                    <span class="blogs-header">Latest Insights</span>
                    <span class="blogs-subheader">New at consulting press</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="image-holder" style="background-image: url('/img/card-2.jpg')"></div>
                        </a>
                        <p class="blog-category">Real Estate</p>
                        <a href="#" class="blog-title">Preserving the cultural heritage with sustainable heritage</a>
                    </div>
                    <div class="col-lg-4">
                        <div class="col-lg-12">
                            <a href="#">
                                <div class="image-holder" style="background-image: url('/img/card-1.png')"></div>
                            </a>
                            <p class="blog-category">Real Estate</p>
                            <a href="#" class="blog-title">Preserving the cultural heritage with sustainable heritage</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            <div class="image-holder" style="background-image: url('/img/card-3.jpg')"></div>
                        </a>
                        <p class="blog-category">Real Estate</p>
                        <a href="#" class="blog-title">Preserving the cultural heritage with sustainable heritage</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-offset-1 col-lg-10">
                    <hr class="blog-hr">
                </div>
            </div>

        </div>

        <div class="row homepage-join" style="background-image: url('/img/cover.jpg');">
            <div class="col-sm-12 col-md-offset-2 col-md-10 col-lg-offset-2 col-lg-10 vertical_center">
                <div class="homepage-join-content">
                    <p class="homepage-join-content-header">Join us today.</p>
                    <p class="homepage-join-content-text">Are you ready to get some more from your tourism business</p>
                    <a class="homepage-join-content-link" href="#">Speak to an advisor</a>
                </div>
            </div>
        </div>
    </div>
@stop
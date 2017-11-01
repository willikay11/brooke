@extends('frontend.layouts.default')

@section('content')

    <div class="container-fluid">

        <div class="row blog-page-header">
            <div class="col-lg-12">
                <div class="col-lg-12 blogs-container blog-page-container">
                    <span class="blogs-header">Latest Insights</span>
                    <span class="blogs-subheader">New at consulting press</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                    <div class="col-lg-4 blog-info-container">
                        <div class="image-holder" style="background-image: url('../../img/img-5.jpg')"></div>
                        <p class="blog-category">Real Estate</p>
                        <a href="#" class="blog-title">Preserving the cultural heritage with sustainable heritage</a>
                    </div>
                    <div class="col-lg-4 blog-info-container">
                        <div class="image-holder" style="background-image: url('../../img/img-5.jpg')"></div>
                        <p class="blog-category">Real Estate</p>
                        <a href="#" class="blog-title">Preserving the cultural heritage with sustainable
                            heritage</a>
                    </div>
                    <div class="col-lg-4 blog-info-container">
                        <div class="image-holder" style="background-image: url('../../img/img-5.jpg')"></div>
                        <p class="blog-category">Real Estate</p>
                        <a href="#" class="blog-title">Preserving the cultural heritage with sustainable heritage</a>
                    </div>
                    <div class="col-lg-4 blog-info-container">
                        <div class="image-holder" style="background-image: url('../../img/img-5.jpg')"></div>
                        <p class="blog-category">Real Estate</p>
                        <a href="#" class="blog-title">Preserving the cultural heritage with sustainable heritage</a>
                    </div>
                    <div class="col-lg-4 blog-info-container">
                        <div class="image-holder" style="background-image: url('../../img/img-5.jpg')"></div>
                        <p class="blog-category">Real Estate</p>
                        <a href="#" class="blog-title">Preserving the cultural heritage with sustainable
                            heritage</a>
                    </div>
                    <div class="col-lg-4 blog-info-container">
                        <div class="image-holder" style="background-image: url('../../img/img-5.jpg')"></div>
                        <p class="blog-category">Real Estate</p>
                        <a href="#" class="blog-title">Preserving the cultural heritage with sustainable heritage</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-lg-offset-1 col-lg-10">
                    <div class="homepage-contact-us">
                        <button class="btn black-button">Load More</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10">
                        <hr class="blog-hr">
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('frontend.layouts.partials.footer-top')
@stop
@extends('frontend.layouts.default')

@section('content')

    <div class="container-fluid" style="padding-top: 90px">

        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="blog-article-info-container">
                    <p class="blog-article-title">{!! $article['title'] !!}</p>
                    <p class="blog-article-author">Emily Eberhard Oct 2017</p>
                </div>
            </div>
        </div>

        <div class="row blog-article-page-banner" style="  background-image: url({!! $article['image'] !!});"></div>

        <div class="row">
            <section class="blog-article-content col-lg-offset-3 col-lg-6">
                {!! $article['body'] !!}
            </section>
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
                            <a href="#" class="blog-title">Preserving the cultural heritage with sustainable
                                heritage</a>
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
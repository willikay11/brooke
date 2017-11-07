@extends('frontend.layouts.default')

@section('content')

    <div class="container-fluid" style="padding-top: 90px">

        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="blog-article-info-container">
                    <p class="blog-article-title">Holiday shoppers want more help in a hurry-here's how to succeed this
                        season</p>
                    <p class="blog-article-author">Emily Eberhard Oct 2017</p>
                </div>
            </div>
        </div>

        <div class="row blog-article-page-banner"></div>

        <div class="row">
            <div class="blog-article-content col-lg-offset-3 col-lg-6">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                    Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at
                    Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a
                    Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the
                    undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et
                    Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                    theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor
                    sit amet..", comes from a line in section 1.10.32.</p>
                <br>
                <p>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                    Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their
                    exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

                </p>
                <br>
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                    embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                    predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                    dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate
                    Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                    injected humour, or non-characteristic words etc.
                </p>
                <br>
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
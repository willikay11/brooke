@extends('frontend.layouts.default')

@section('content')

    <div class="container-fluid">
        <div class="row about-page-banner">
            <div class="col-lg-offset-1 col-lg-11 col-md-offset-1 col-md-1 col-sm-12 vertical_center about-page-banner-text-container">
                <p class="about-page-banner-text">Life inside the brooke consult</p>
            </div>
        </div>

        <div class="row about-page-who-are-we">
            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10">
                <div class="col-lg-6 col-md-6">
                    <p class="about-page-who-are-we-header">Who are we</p>
                    <p class="about-page-who-are-we-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p class="about-page-who-are-we-header">What we do</p>
                    <p class="about-page-who-are-we-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-sm-12 col-lg-12 col-md-12">
                    <div class="col-sm-4 col-md-4 col-lg-4 about-page-image-container">
                        <div class="about-page-image"></div>
                        <div class="about-page-image-text-holder">
                            <p class="about-page-image-name">Paul Stafford</p>
                            <p class="about-page-image-title">CEO and Founding Partner</p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 about-page-image-container">
                        <div class="about-page-image"></div>
                        <div class="about-page-image-text-holder">
                            <p class="about-page-image-name">Paul Stafford</p>
                            <p class="about-page-image-title">CEO and Founding Partner</p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 about-page-image-container">
                        <div class="about-page-image"></div>
                        <div class="about-page-image-text-holder">
                            <p class="about-page-image-name">Paul Stafford</p>
                            <p class="about-page-image-title">CEO and Founding Partner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row about-page-press-container">
            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <p class="press-header">Press and accomplishments</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 press-text-container">
                    <p class="press-text">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text. </p>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 press-text-container">
                    <p class="press-text">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text. </p>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 press-text-container">
                    <p class="press-text">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text. </p>
                </div>
            </div>
        </div>

        @include('frontend.layouts.partials.footer-top')

    </div>

@stop
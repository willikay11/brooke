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
            <blogs inline-template>
                <div class="row">
                    <div class="col-lg-offset-1 col-lg-10 col-sm-12">
                        <div class="col-lg-4 blog-info-container" v-for="row in rowCollection" :key="row.id">
                            <a :href="'/blog/article/'+row.slug">
                                <div class="image-holder"
                                     :style="{ 'background-image': 'url(' + row.image + ')' }"></div>
                            </a>
                            <p class="blog-category">Real Estate</p>
                            <a :href="'/blog/article/'+row.slug" class="blog-title">@{{ row.title }}</a>
                        </div>
                        {{--@foreach($blogs as $blog)--}}
                        {{--<div class="col-lg-4 blog-info-container">--}}
                        {{--<a href="/blog/article/{{ $blog['slug'] }}">--}}
                        {{--<div class="image-holder" style="background-image: url({!! $blog['image'] !!})"></div>--}}
                        {{--</a>--}}
                        {{--<p class="blog-category">Real Estate</p>--}}
                        {{--<a href="/blog/article/{{ $blog['slug'] }}" class="blog-title">{!! $blog['title'] !!}</a>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-lg-offset-1 col-lg-10">
                        <div class="homepage-contact-us">
                            <button v-on:click="loadMore()" class="btn black-button">Load More</button>
                        </div>
                    </div>

            </blogs>

            <div class="row">
                <div class="col-lg-offset-1 col-lg-10">
                    <hr class="blog-hr">
                </div>
            </div>

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
@stop
@extends('frontend.layouts.default')

@section('content')

    <div class="container-fluid" style="padding-top: 90px">

        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="blog-article-info-container">
                    <p class="contact-title">Let's join hands and work in this wonderful journey together</p>
                </div>
            </div>
        </div>

        <div class="row">
            @include('frontend.layouts.partials.flash')
            {!! Forms::open(['route' => 'contact.store']) !!}
            <div class="col-lg-offset-3 col-lg-6 contact-container">
                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label class="contact-input-label" for="firstname">First Name</label>
                    {!! Forms::text('firstname', null, ["class" => "form-control" ]) !!}
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label class="contact-input-label" for="firstname">Last Name</label>
                    {!! Forms::text('lastname', null, ["class" => "form-control"]) !!}
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                    <label class="contact-input-label" for="firstname">Email</label>
                    {!! Forms::email('email', null, ["class" => "form-control", 'placeholder' => 'email@example.com']) !!}
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label class="contact-input-label" for="firstname">Phone Number</label>
                    {!! Forms::text('phone', null, ["class" => "form-control", 'placeholder' => '0708977444']) !!}
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                    <label class="contact-input-label" for="firstname">Location</label>
                    {{--{!! Forms::text('location', null, ["class" => "form-control"]) !!}--}}
                    {!! Forms::select('location', [$countries], null, ["class" => "form-control"]) !!}
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                    <label class="contact-input-label" for="firstname">Inquiry</label>
                    {!! Forms::text('inquiry', null, ["class" => "form-control"]) !!}
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                    <label class="contact-input-label" for="firstname">Message</label>
                    {!! Forms::textarea('message', null, ["class" => "form-control", 'rows' => '4']) !!}
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                    {{--<button class="btn contact-submit-button">SUBMIT</button>--}}
                    {!! Forms::submit('SUBMIT', ['class' => 'btn contact-submit-button']) !!}
                </div>
            </div>
            {!! Forms::close() !!}
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


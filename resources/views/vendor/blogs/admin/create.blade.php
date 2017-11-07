@extends('core::admin.master')

@section('title', trans('blogs::global.New'))

@section('main')

    @include('core::admin._button-back', ['module' => 'blogs'])
    <h1>
        @lang('blogs::global.New')
    </h1>

    {!! BootForm::open()->action(route('admin::index-blogs'))->multipart()->role('form') !!}
        @include('blogs::admin._form')
    {!! BootForm::close() !!}

@endsection

@extends('core::admin.master')

@section('title', trans('blogs::global.name'))

@section('main')

<div ng-app="typicms" ng-cloak ng-controller="ListController">

    @include('core::admin._button-create', ['module' => 'blogs'])

    <h1>
        <span>@{{ models.length }} @choice('blogs::global.blogs', 2)</span>
    </h1>

    <div class="btn-toolbar">
        @include('core::admin._lang-switcher')
    </div>

    <div class="table-responsive">

        <table st-persist="blogsTable" st-table="displayedModels" st-safe-src="models" st-order st-filter class="table table-condensed table-main">
            <thead>
                <tr>
                    <th st-sort="title" class="title st-sort">Title</th>
                    <th st-sort="image" class="image st-sort">Image</th>
                    <th st-sort="status" class="status st-sort">Status</th>
                    <th class="edit"></th>
                    <th class="delete"></th>
                </tr>
                <tr>
                    <td>
                        <input st-search="title" class="form-control input-sm" placeholder="@lang('global.Search')…" type="text">
                    </td>
                </tr>
            </thead>

            <tbody>
                <tr ng-repeat="model in displayedModels">
                    <td>@{{ model.title }}</td>
                    <td>
                        <img ng-src="@{{ model.thumb }}" alt="">
                    </td>
                    <td typi-btn-status action="toggleStatus(model)" model="model"></td>
                    <td>
                        @include('core::admin._button-edit', ['module' => 'blogs'])
                    </td>
                    <td typi-btn-delete action="delete(model)"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" typi-pagination></td>
                </tr>
            </tfoot>
        </table>

    </div>

</div>

@endsection

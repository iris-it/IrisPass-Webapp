@extends('layouts.app')

@section('breadcrumbs')
    {!! Breadcrumbs::render('organization_edit') !!}
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">
                    <h3>{{ trans('organization.edit') }}</h3>
                </div>
                <div class="content">

                    @include('errors.list')

                    {!! Form::model($organization->toArray(), ['method' => 'PATCH','action' => 'OrganizationController@update', 'class'=> 'form-horizontal']) !!}

                    @include('pages.organization.partials.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection
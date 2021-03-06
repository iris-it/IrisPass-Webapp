@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">
                    <h3>{{ trans('website.create') }}</h3>
                </div>
                <div class="content">

                    @include('errors.list')

                    {!! Form::open(['method' => 'POST','action' => 'WebsiteController@store', 'class'=> 'form-horizontal']) !!}

                    @include('pages.website.partials.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>

@endsection
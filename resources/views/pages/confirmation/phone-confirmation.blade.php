@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="block-flat">
                <div class="header">
                    <h3>{{ trans('confirmation.phone-validation') }}</h3>
                </div>
                <div class="content">


                    @include('errors.list')

                    {!! Form::open(['action' => 'Auth\ConfirmationController@handlePhoneCode']) !!}

                    @include('pages.confirmation.partials.form')

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
@stop
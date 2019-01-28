@extends('layouts.app')


@section('content')
    <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Create list<a href="/dashboard" class="float-right btn btn-outline-success">Goback</a></div>

                            <div class="card-body">
                                    {!! Form::open(['action'=>'ListingsController@store','method'=>'POST']) !!}
                                    {{ Form::bsText('name','',['placeholder'=>'Company Name'])}}
                                    {{ Form::bsText('email','',['placeholder'=>'Email adresss'])}}
                                    {{ Form::bsText('website','',['placeholder'=>'Company Website'])}}
                                    {{ Form::bsText('phone','',['placeholder'=>'Phone'])}}
                                    {{ Form::bsText('address','',['placeholder'=>'Business Address'])}}
                                    {{ Form::bsTextArea('bio','',['placeholder'=>'About This business'])}}
                                    {{ Form::bsSubmit('submit',['class'=>'btn btn-primary'])}}
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

    </div>

@endsection

@extends('layouts.app')


@section('content')
    <div class="container">
            <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Edit list <a href="/dashboard" class="float-right btn btn-outline-success">Goback</a></div>

                            <div class="card-body">
                                    {!! Form::open(['action'=>['ListingsController@update',$listing->id],'method'=>'POST']) !!}
                                    {{ Form::bsText('name',$listing->name,['placeholder'=>'Company Name'])}}
                                    {{ Form::bsText('email',$listing->email,['placeholder'=>'Email adresss'])}}
                                    {{ Form::bsText('website',$listing->website,['placeholder'=>'Company Website'])}}
                                    {{ Form::bsText('phone',$listing->phone,['placeholder'=>'Phone'])}}
                                    {{ Form::bsText('address',$listing->address,['placeholder'=>'Business Address'])}}
                                    {{ Form::bsTextArea('bio',$listing->name,['placeholder'=>'About This business'])}}
                                    {{ Form::hidden('_method','PUT')}}
                                    {{ Form::bsSubmit('submit',['class'=>'btn btn-primary'])}}
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

    </div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                <div class = "d-flex justify-content-between">
                <span class="h3">Dashboard</span>
                <span class="pull-right"><a href="/listings/create" class="btn btn-success">Create</a></span></div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your Listings</h3>
                    @if (count($listings))
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>company</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listings as $listing)
                                    <tr>
                                        <td scope="row">{{$listing->name}}</td>
                                        <td><a class = "btn btn-info float-right"href="/listings/{{$listing->id}}/edit">Edit</a></td>
                                        <td>
                                                {!! Form::open(['action'=>['ListingsController@destroy',$listing->id],'method'=>'POST','class'=>'float-right','onsubmit'=>'return confirm("Are you sure")']) !!}
                                                {{ Form::hidden('_method','Delete')}}
                                                {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}}
                                                {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

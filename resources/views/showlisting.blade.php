@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <div>
                        <span class="h3">{{$listing->name}}</span>
                        <a href="/" class="float-right btn btn-outline-success">Goback</a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Address : {{$listing->address}}</li>
                        <li class="list-group-item">Website : <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                        <li class="list-group-item">Email : {{$listing->email}}</li>
                        <li class="list-group-item">phone : {{$listing->phone}}</li>
                    </ul>
                    <p class="card-text">
                        Bio:
                        {{$listing->bio}}
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

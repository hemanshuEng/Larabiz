@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">

                <div>
                    <span class="h3">Latest listing</span>

                </div>
            </div>
                <div class="card-body">

                    <h3>Your Listings</h3>
                    @if (count($listings))
                    <ul class="list-group">
                        @foreach ($listings as $listing)
                        <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a></li>
                        @endforeach
                    </ul>
                    @else
                    <p>No listing Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

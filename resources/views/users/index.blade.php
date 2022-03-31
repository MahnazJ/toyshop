@extends('layouts.app')

@section('content')
@section('title', 'product')

<div class="container">
    <div class="row">
        @foreach($users as $user)
        <div class="col-md-3 p-2 product-col">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title text-style">{{ $user->id }}</h5>
                    <p class="details alert-warning text-danger">{{ $user->name }}</p>
                    <p class="price text-style">{{ $user->email }}</p>
                    <div class="btn btn-outline-primary shadow"><a href="/users/{{ $user->id }}">Show More</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
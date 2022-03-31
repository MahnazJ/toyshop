@extends('layouts.app')

@section('content')
@section('title', 'Users Show')

<div class="container">
    <div class="row">
        <div class="col-md-3 p-2 product-col">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title text-style">{{ $user->id }}</h5>
                    <p class="details alert-warning text-danger">{{ $user->name }}</p>
                    <p class="price text-style">{{ $user->email }}</p>
                    <div class="btn btn-outline-primary shadow"><a href="{{ $user->id }}/edit">edit</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
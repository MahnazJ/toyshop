@extends('layouts.app')

@section('content')
@section('title', 'Products Showcase')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6 text-center">
                <h1 class="card display-3">Hello, Meet {{ $product->name }}</h1>
                <img class="card text-center" src="/images/webshop/{{ $product->file_name }}" alt="..." width="100%">
                <p class="details alert-warning text-danger ">{{ $product->description }}</p>
                <p class="card alert-warning display-3 text-danger"> € {{ $product->price }}</p>
                <div class="btn btn-outline-danger"><a href="/cart">Buy me now!</a></div>
            </div>
        </div>
    </div>
</main>

@endsection
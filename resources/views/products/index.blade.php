@extends('layouts.app')

@section('content')
@section('title', 'product')

<h1 class="text-center mt-3 mb-2 buttonstyle long-text">Product specific</h1>

<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 pt-3 p-2 product-col">
            <div class="card">
                <img src="/images/webshop/{{ $product->file_name }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-style">{{ $product->name }}</h5>
                        <p class="price text-style"> &euro; {{ $product->price }}</p>
                        <p class="price text-style">Details: {{ $product->details }}</p>
                        <p class="price text-style">Color: {{ $product->color }}</p>

                        <add-to-cart-button product-id="{{ $product->id }}" user-id="{{ auth()->user()->id ?? 0 }}"/>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection

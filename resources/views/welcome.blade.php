@extends('layouts.app')

@section('content')
@section('title', 'Welcome')

</head>
{{-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('auth/home.blade.php') }}" class="text-sm text-gray-700 dark:text-gray-500
underline">Home</a>
@else
<a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

@if (Route::has('register'))
<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
@endif
@endauth
</div>
@endif --}}


<div class="container">
    <div class="row">
        @if (isset($products))
        @foreach ($products as $product)
        <div class="col-md-3 pt-3 p-2 product-col">
            <div class="card">
                <img src="/images/webshop/{{ $product->file_name }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-style">{{ $product->name }}</h5>
                    <p class="price text-style"> &euro; {{ $product->price }}</p>

                    {{-- <add-to-cart-button product-id="{{ $product->id }}"
                    user-id="{{ auth()->user()->id ?? 0 }}" class="btn text-style submit-button"/> --}}
                    <input type="button" class="btn text-style submit-button" value="Add to cart">
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection


</body>

</html>
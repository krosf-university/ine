@extends('masters.welcome')
@section('title', 'Product')
@section('content')
    <div class="d-flex flex-column w-100 justify-content-center align-items-center">
        <div class="card product detail">
            <img src="/{{ $product->imgurl }}" class="card-img-top">
            <div class="card-body">
                @if ($product->hasDiscount())
                    <h5 class="card-title d-flex justify-content-between">
                        <span>{{ $product->price }}€</span>
                        <span>-{{ $product->discountPercent }}%</span>
                    </h5>
                @else
                    <h5 class="card-title">{{ $product->price }}€</h5>
                @endif
                <h6 class="card-subtitle mb-2 text-muted d-flex justify-content-between">
                    <span class="text-capitalize">{{ $product->name }}</span>
                    <span class="text-capitalize">{{ $product->company->name }}</span>
                </h6>
                <p class="card-text">{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection

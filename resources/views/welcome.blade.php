@extends('masters.welcome')
@section('title', 'Dropship')
@section('content')
    <div class="d-flex flex-column flex-grow-1 flex-shrink-1 px-4">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($aProduct_offering as $product)
                <div class="col">
                    <div class="card product">
                        <img src="{{ $product->imgurl }}" class="card-img-top">
                        <div class="card-body pl-0">
                            @if ($product->hasDiscount())
                                <h5 class="card-title d-flex justify-content-between">
                                    <span>{{ $product->price }}€</span>
                                    <span>-{{ $product->discountPercent }}%</span>
                                </h5>
                            @else
                                <h5 class="card-title">{{ $product->price }}€</h5>
                            @endif
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->name }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex-grow-1 flex-shrink-1 d-flex justify-content-between align-items-center">
            <button type="button" class="btn-brand"><span>Adidas</span></button>
            <button type="button" class="btn-brand"><span>Nike</span></button>
            <button type="button" class="btn-brand"><span>Hollister</span></button>
            <button type="button" class="btn-brand"><span>Champion</span></button>
            <button type="button" class="btn-brand"><span>Ripcurl</span></button>
            <button type="button" class="btn-brand"><span>Abercrombie</span></button>
            <button type="button" class="btn-caret-down"><svg width="20px" height="20px" viewBox="0 0 16 16"
                    class="bi bi-caret-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3.204 5L8 10.481 12.796 5H3.204zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z" />
                </svg></button>
        </div>
        <div class="row row-cols-1 row-cols-md-4">
            @foreach ($aProduct_new as $product)
                <div class="col">
                    <div class="card product">
                        <img src="{{ $product->imgurl }}" class="card-img-top">
                        <div class="card-body pl-0">
                            @if ($product->hasDiscount())
                                <h5 class="card-title d-flex justify-content-between">
                                    <span>{{ $product->price }}€</span>
                                    <span>-{{ $product->discountPercent }}%</span>
                                </h5>
                            @else
                                <h5 class="card-title">{{ $product->price }}€</h5>
                            @endif
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->name }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex flex-column flex-grow-0 flex-shrink-0 w-25 pl-4">
        <div class="d-flex flex-column w-100 h-100">
            <div class="d-flex flex-column mb-2">
                <h2>Top Sales</h2>
            </div>
            <div class="d-flex flex-column justify-content-between flex-grow-1 flex-shrink-1 top-sale">
                <div class="d-flex top-sale-item">
                    <span class="h3 text-muted font-weight-bold">1</span>
                    <div class="px-4">
                        <img src="https://image.uniqlo.com/UQ/ST3/WesternCommon/imagesgoods/429012/item/goods_08_429012.jpg?width=2000"
                            class="img-fluid">
                    </div>
                </div>
                <div class="d-flex top-sale-item">
                    <span class="h3 text-muted font-weight-bold">2</span>
                    <div class="px-4">
                        <img src="https://image.uniqlo.com/UQ/ST3/WesternCommon/imagesgoods/429012/item/goods_09_429012.jpg?width=2000"
                            class="img-fluid">
                    </div>
                </div>
                <div class="d-flex top-sale-item">
                    <span class="h3 text-muted font-weight-bold">3</span>
                    <div class="px-4">
                        <img src="https://image.uniqlo.com/UQ/ST3/WesternCommon/imagesgoods/429012/sub/goods_429012_sub10.jpg?width=2000"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

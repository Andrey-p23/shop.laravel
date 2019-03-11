@extends('layouts.layout')

@section('title', $product->name)

@section('hero')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <a href="{{ route('shop.index') }}">Shop</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span class="breadcrumbs-product-name">{{ $product->name }}</span>
        </div>
    </div>

    <div class="product-section container">
        <div class="product-section-image">
            <img src="{{ asset('img/products/'.$product->url.'.jpg') }}" alt="product">
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">{{ $product->name }}</h1>

            <div class="product-section-block">
                <span class="name">Caregory:  </span>
                <span class="product-section-subtitle">{{ $category->name }}</span>
            </div>

            <div class="product-section-block">
                <span class="name">Author:  </span>
                <span class="product-section-subtitle">{{ $author->name }}</span>
            </div>

            <div class="product-section-block">
                <span class="name">Publisher:  </span>
                <span class="product-section-subtitle">{{ $publisher->name }}</span>
            </div>

            <div class="product-section-block">
                <span class="name">Cover:  </span>
                <span class="product-section-subtitle">{{ $cover->name }}</span>
            </div>

            <div class="product-section-block">
                <span class="name">Language:  </span>
                <span class="product-section-subtitle">{{ $language->name }}</span>
            </div>

            <div class="product-section-block">
                <span class="name">Pages:  </span>
                <span class="product-section-subtitle">{{ $product->pages }}</span>
            </div>

            <div class="product-section-block">
                <span class="name">Year:  </span>
                <span class="product-section-subtitle">{{ $product->year }}</span>
            </div>

            <div class="price">
                <span class="product-section-price">
                    {{ $product->asDollars() }}
                </span>
                <form action="{{ route('cart.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="category" value="{{ $category->name }}">
                    <button type="submit" class="button button-plain">Add to Cart</button>
                </form>
            </div>

            <p class="description">{{ $product->description }}</p>

            <p>&nbsp;</p>



        </div>
    </div>

    @include('partials.might-like')

@endsection


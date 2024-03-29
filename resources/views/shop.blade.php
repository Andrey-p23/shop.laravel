@extends('layouts.layout')

@section('title', 'Products')

@section('hero')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
    </div>

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                @foreach($categories as $category)
                    <li class="{{ setActiveCategory($category->slug) }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div> {{--end sidebar--}}

        <div>
            <div class="products-header">
                <h1 class="stylish-heading">{{ $categoryName }}</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>
                </div>
            </div>
            <div class="products text-center">
                @forelse ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->url) }}"><img src="{{ asset('img/products/'.$product->url.'.jpg')
                        }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->url) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->asDollars() }}</div>
                    </div>
                @empty
                    <div style="text-align: left">No items found</div>
                @endforelse

            </div> <!-- End products -->

            <div class="spacer"></div>
            {{ $products->appends(request()->input())->links() }}

        </div>

    </div>



@endsection


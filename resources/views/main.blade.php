<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book Shop</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>
<body>

<header>

    <div class="top-nav container">
        <div class="logo"><img src="img/logo.png" alt=""></div>
        <ul>
            <li><a href="{{ route('shop.index') }}">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="{{ route('cart.index') }}">Cart</a>
            </li>
        </ul>
        <span class="cart-count">
                        @if(Cart::instance('default')->count()>0)
                <span>{{ Cart::instance('default')->count() }}</span>
            @endif
        </span>
    </div> <!-- End top-nav -->

    <div class="hero container">
        <div class="hero-copy">
            <h1>Book Shop</h1>
            <p>Brick & Mortar Books is focused on being a community resource with author events,
                over 20,000 new books, and exceptional customer service. Click on the above Facebook
                link for store updates.
            </p>
            <div class="hero-buttons">
                <a href="#" class="button button-white">Button 1</a>
                <a href="#" class="button button-white">Button 2</a>
            </div>
        </div> <!-- End hero-copy -->

        <div class="hero-image">
            <img src="img/main.png" alt="hero image">
        </div>
    </div> <!-- End hero -->

</header>

<div class="featured-section">
    <div class="container">
        <h1 class="text-center">Book Shop</h1>

        <p class="section-description">Brick & Mortar Books is now offering over 90,000
            audiobooks through our partner Libro.fm, and all sales support our store! Visit
            the Audiobooks page to learn more and get started.
        </p>

        <div class="text-center button-container">
            <a href="#" class="button">Featured</a>
            <a href="#" class="button">On Sale</a>
        </div>

        <div class="products text-center">
            @foreach($products as $product)
                <div class="product">
                    <a href="{{ route('shop.show', $product->url) }}"><img src="{{ asset('img/products/'.$product->url.'.jpg')
                    }}" alt="product"></a>
                    <a href="{{ route('shop.show', $product->url) }}"><div class="product-name">{{ $product->name }}</div></a>
                    <div class="product-price">{{ $product->asDollars() }}</div>
                </div>
            @endforeach
        </div> <!-- End products -->

        <div class="text-center button-container">
            <a href="{{ route('shop.index') }}" class="button">View more products</a>
        </div>
    </div> <!-- End container -->
</div> <!-- End featured-section -->

@section('blog')
    <div class="blog-section">
        <div class="container">
            <h1 class="text-center">From our blog</h1>

            <p class="section-description">Always heard that as President, “it’s all about the economy!”
                Well, we have one of the best economies in the history of our Country. Big GDP, lowest
                unemployment, companies coming back to the U.S. in BIG numbers, great new trade deals happening,
                & more. But LITTLE media mention!
            </p>

            <div class="blog-posts">
                <div class="blog-post" id="blog1">
                    <a href="#"><img src="img/img-blog1.jpg" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                    <div class="blog-description">
                        Don’t forget, we are building and renovating big sections of
                        Wall right now.
                    </div>
                </div>

                <div class="blog-post" id="blog2">
                    <a href="#"><img src="img/img-blog2.jpg" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                    <div class="blog-description">
                        Don’t forget, we are building and renovating big sections of
                        Wall right now.
                    </div>
                </div>

                <div class="blog-post" id="blog3">
                    <a href="#"><img src="img/img-blog3.jpg" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                    <div class="blog-description">
                        Don’t forget, we are building and renovating big sections of
                        Wall right now.
                    </div>
                </div>
            </div> <!-- End blod-posts -->
        </div> <!-- End container -->
    </div> <!-- End blod-section -->
@show

@include('partials.footer')

</body>
</html>
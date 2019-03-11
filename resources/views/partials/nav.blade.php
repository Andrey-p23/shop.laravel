<header>

    <div class="top-nav container">
        <div class="logo"><a href="/"><img src="{{ asset('img/logo.png') }}" alt=""></a></div>
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

</header>
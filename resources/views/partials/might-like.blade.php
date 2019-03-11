@section('extra-css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
@endsection

<div class="might-like-section">
    <div class="container">
        <h3>You might also like...</h3>
        <div class="might-like-grid">
            <?php $i = 1; ?>
            @foreach ($mightLike as $product)
                <div class="panel" id="{{ $i++ }}">
                    <div class="back">
                        <a href="{{ route('shop.show', $product->url) }}" class="might-like-product">
                            <img src="{{ asset('img/products/'.$product->url.'.jpg') }}" alt="product">
                        </a>
                    </div>
                    <div class="front">
                        <div class="text">
                            <a href="{{ route('shop.show', $product->url) }}" class="might-like-product">
                                <div class="might-like-product-name">{{ $product->name }}</div>
                                <div class="might-like-product-price">{{ $product->asDollars() }}</div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    'use strict';
    $(document).ready(function(){
        setTimeout(add, 500);


        var check;
        var turn;


        $('.panel').hover(
            function(){
                if($(this).hasClass('flip')){
                    $(this).removeClass('flip')
                    check=true;
                }
                else {
                    $(this).addClass('flip')
                    check=false;
                }
            },
            function(){
                if(check){
                    $(this).addClass('flip')
                }
                else {
                    $(this).removeClass('flip')
                }
            }
        )

        setInterval(tick, 5000);


        function tick() {

            if(turn){
                setTimeout(add, 500);
            }
            else {
                setTimeout(rem, 500);
            }

            function rem() {
                $('.panel').removeClass('flip');
                turn=true;
            }

            function add() {
                $('.panel').addClass('flip');
                turn = false;
            }
        }

        function add() {
            $('.panel').addClass('flip');
        }

    });


</script>
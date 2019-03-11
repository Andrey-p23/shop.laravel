<?php

function asDollars($price) {

//if($price<1000)
//    return number_format((float)$price, 2) . ' UA';

return $price.' UA';

}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function getNumbers()
{
    $tax = config('cart.tax') / 100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $newSubtotal = (Cart::subtotal() - $discount);
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);

    return collect([
        'tax' => $tax,
        'discount' => $discount,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}
<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //

    public function index(){

        $products = Product::inRandomOrder()->take(8)->get();

        return view('main')->with('products', $products);

//        $view = view('main');
//
//        if (view()->exists('main')){
//            return $view;
//        }
//
//        abort(404);

    }
}

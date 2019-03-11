<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Author;
use App\Publisher;
use App\Cover;
use App\Language;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 9;
        $categories = Category::all();

        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {
            $products = Product::take(12);
            $categoryName = 'Featured';
        }

        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }

        return view('shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $url
     * @return \Illuminate\Http\Response
     */
    public function show($url)
    {
        $product = Product::where('url', $url)->firstOrFail();

        $category = \DB::table('category') ->select( 'category.id', 'category.name', 'products.id')
            ->leftJoin('category_product', 'category.id', '=', 'category_product.category_id')
            ->leftJoin('products', 'category_product.product_id', '=', 'products.id')
            ->where('products.id', '=', $product->id)->first();

        $author = Author::where('id', $product->author_id)->firstOrFail();
        $publisher = Publisher::where('id', $product->publisher_id)->firstOrFail();
        $cover = Cover::where('id', $product->cover_id)->firstOrFail();
        $language = Language::where('id', $product->language_id)->firstOrFail();
        $mightLike = Product::where('url', '!=', $url)->mightLike()->get();

        return view('product')->with('product', $product)->with('author', $author)
            ->with('publisher', $publisher)->with('cover', $cover)->with('language', $language)
            ->with('mightLike', $mightLike)->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

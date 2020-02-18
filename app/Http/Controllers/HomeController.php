<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('user.home', compact('products'));
    }

    /**
     * Show the product that has been clicked
     *
     */
    public function showProduct(Request $request)
    {
        $product = Product::find($request->route('product_id'));
        return view('user.product', compact('product'));
    }
}

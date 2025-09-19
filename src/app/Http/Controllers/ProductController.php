<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Products;

class ProductController extends Controller
{
    public function products()
    {
        $pagenate = Products::Paginate(6);
        $products = Products::all();
        return view('products', compact('products', 'pagenate'));
    }
    public function register()
    {
        return view('register');
    }
    public function store(RegisterRequest $request)
    {
        $products = $request->only('name', 'price', 'image', 'season', 'description');
        Products::create($products);
        return view('product');
    }
    public function dateil($id)
    {
        $products = Products::find($id);
        dd($products);
        return view('dateil', compact('products'));
    }
    public function update(RegisterRequest $request) {}
    public function content(Request $request)
    {
        $products = $request->only('name', 'price', 'image', 'season', 'description');
        return view('dateil', compact('products'));
    }
}

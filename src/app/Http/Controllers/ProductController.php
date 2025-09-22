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
    public function search(Request $request)
    {
        $contents = Products::all()->keywordSearch($request->keyword)->get();
        return view('products', compact('contents'));
    }
    public function sort(Request $request)
    {
        $query = Products::query();
        switch ($request->sort_by) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
        }
        return view('products');
    }

    public function register()
    {
        return view('register');
    }
    public function store(RegisterRequest $request)
    {
        $products = $request->all();
        // $products = $request->only('name', 'price', 'image', 'season', 'description');
        Products::create($products);
        return redirect('products')->with('message', '新しく商品をを追加しました');
    }
    public function detail($productid)
    {
        $products = Products::find($productid);
        return view('detail', compact('products'));
    }
    public function update(RegisterRequest $request) {}
}

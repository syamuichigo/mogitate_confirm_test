<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Products;
use App\Models\Seasons;
use App\Models\ProductsSeason;

class ProductController extends Controller
{
    public function products()
    {
        $products = Products::Paginate(6);
        return view('products', compact('products'));
    }
    public function search(Request $request)
    {
        $products = Products::keywordSearch($request->keyword)->pagenate(6);
        return view('products', compact('products'));
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
        Products::create($products);
        return redirect('products')->with('message', '新しく商品をを追加しました');
    }
    public function detail($productid)
    {
        $products = Products::all()->find($productid);
        $seasons = Seasons::all();
        $products_season = ProductsSeason::where('product_id')->get('season_id');
        return view('detail', compact('products', 'seasons', 'products_season'));
    }
    public function update(RegisterRequest $request) {}
}

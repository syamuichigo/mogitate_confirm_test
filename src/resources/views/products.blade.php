@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/products.css')}}">
@endsection

@section('content')
<div class="product-page">
    <div class="titel">
        <div class="titel_inner">
            <h1 class="titel_inner-text">商品一覧</h1>
        </div>
        <div class="register_inner">
            <a href="/register" class="register_button">+ 商品を追加</a>
        </div>
    </div>
    <div class="main">
        <div class="search">
            <form action="/products/search" method="get" class="input-content">
                @csrf
                <div class="search-content">
                    <input type="text" name="keyword" class="input_text">
                    <button type="submit" class="input_button">検索</button>
                </div>
            </form>
            <form action="/products/sort" method="get">
                <div class="sort">
                    <p class="sort-title">価格順で表示</p>
                    <select class="sort-input" name="" id="">
                        <option value="">高い順で表示</option>
                        <option value="">低い順で表示</option>
                    </select>
                    <button class="sort-button">適用</button>
                </div>
            </form>
        </div>
        <div class="product">
            @foreach($products as $product)
            <a href="/products/{{$product['id']}}" class="product_inner">
                <div class="product-img">
                    <img src="{{$product['image']}}" alt="{{$product['name']}}">
                </div>
                <div class="product-content">
                    <p class="product-content_name">{{$product['name']}}</p>
                    <p class="product-content_price">￥{{$product['price']}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
{{$pagenate->links()}}
@endsection
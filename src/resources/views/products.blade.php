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
            <form action="/products/search" method="post" class="input-content">
                <input type="text" class="input_text">
                <button type="submit" class="input_button">検索</button>
            </form>
            <!-- ここに並べ替え表示のコード -->
        </div>
        <div class="product">
            @foreach($products as $product)
            <!-- <form action="/product/{productid}" method="get">
                <button type="submit" class="product_inner" name="{{$product['id']}}">
                    <div class="product-img">
                        {{$product['image']}}
                    </div>
                    <div class="product-content">
                        <p class="product-content_name">{{$product['name']}}</p>
                        <p class="product-content_price">￥{{$product['price']}}</p>
                    </div>
                </button>
            </form> -->
            <a href="/product/{id}" class="product_inner">
                <div class="product-img">
                    {{$product['image']}}
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
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/dateil.css')}}">
@endsection

@section('content')

@foreach($products as $product)
<div class="dateil-title">
    <a href="/product" class="dateil-title_text">商品一覧</a>
    <p class="dateil-title_name"> > {{$product['name']}}</p>
</div>
<form action="/products/update" class="dateil">
    @csrf
    <div class="dateil-inner">
        <div class="img">
            <img src="" alt="" class="dateil-content_img">
            <input type="file" name="image" id="" class="dateil-content_img-input">
        </div>
        <div class="content">
            <div class="content-inner">
                <p class="dateil-content_name">商品名</p>
                <input type="text" name="name" class="dateil-content_input" value="{{$product['name']}}">
                <div class="dateil-content_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="content-inner">
                <p class="dateil-content_name">値段</p>
                <input type="text" name="price" class="dateil-content_input" value="{{$product['price']}}">
                <div class="dateil-content_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="dateil-inner">
                <p class="dateil-content_name">季節</p>
                <div class="dateil-content_season">
                    <div class="season">
                        <input class="dateil-content_season-input" type="radio" name="season" id="">
                        <label class="season-text">春</label>
                    </div>
                    <div class="season">
                        <input class="dateil-content_season-input" type="radio" name="season" id="">
                        <label class="season-text">夏</label>
                    </div>
                    <div class="season">
                        <input class="dateil-content_season-input" type="radio" name="season" id="">
                        <label class="season-text">秋</label>
                    </div>
                    <div class="season">
                        <input class="dateil-content_season-input" type="radio" name="season" id="">
                        <label class="season-text">冬</label>
                    </div>
                </div>
                <div class="dateil-content_error">
                    @error('season')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="dateil-description">
        <p class="dateil-description_title">商品説明</p>
        <textarea name="description" id="" class="dateil-description_content">{{$product['description']}}</textarea>
    </div>
    <div class="button">
        <a href="/product" class="button-back">戻る</a>
        <button type="submit" class="button-update">変更を保存</button>
    </div>
</form>
@endforeach
@endsection
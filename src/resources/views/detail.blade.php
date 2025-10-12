@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/dateil.css')}}">
@endsection

@section('content')
<div class="dateil-title">
    <a href="/product" class="dateil-title_text">商品一覧</a>
    <p class="dateil-title_name"> > {{$products['name']}}</p>
</div>
<form action="/products/update" class="dateil">
    @csrf
    <div class="dateil-inner">
        <div class="img">
            <img src="{{$products['image']}}" alt="{{$products['name']}}" class="dateil-content_img">
            <input type="file" name="image" id="" class="dateil-content_img-input">
        </div>
        <div class="content">
            <div class="content-inner">
                <p class="dateil-content_name">商品名</p>
                <input type="text" name="name" class="dateil-content_input" value="{{$products['name']}}">
                <div class="dateil-content_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="content-inner">
                <p class="dateil-content_name">値段</p>
                <input type="text" name="price" class="dateil-content_input" value="{{$products['price']}}">
                <div class="dateil-content_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="dateil-inner">
                <p class="dateil-content_name">季節</p>
                @foreach ($seasons as $season)
                <div class="dateil-content_season">
                    @if(isset($products_season))
                    <input type="checkbox" id="season" value="{{$season['id']}}" name="season[]" checked class="dateil-content_input-season">
                    @else
                    <input type="checkbox" id="season" value="{{$season['id']}}" name="season[]" class="dateil-content_input-season">
                    @endif
                    <label for="season" class="season-text">{{$season['name']}}</label>
                </div>
                @endforeach
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
        <textarea name="description" id="" class="dateil-description_content">{{$products['description']}}</textarea>
    </div>
    <div class="button">
        <a href="/product" class="button-back">戻る</a>
        <button type="submit" class="button-update">変更を保存</button>
    </div>
</form>
@endsection
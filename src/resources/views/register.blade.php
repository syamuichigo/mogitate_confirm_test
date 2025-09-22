@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<div class="register_header">
    <div class="register_header-title">
        <h1 class="header-title_text">商品登録</h1>
    </div>
    <form action="/product/register" method="post">
        @csrf
        <div class="register">
            <div class="register-content">
                <div class="register-content_title">
                    <p class="register-content_name">商品名</p>
                    <p class="register-content_required">必須</p>
                </div>
                <input type="text" name="name" class="register-content_input" placeholder="商品名を入力" value="{{old('name')}}">
                <div class="register-content_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-content">
                <div class="register-content_title">
                    <p class="register-content_name">値段</p>
                    <p class="register-content_required">必須</p>
                </div>
                <input type="text" name="price" class="register-content_input" placeholder="値段を入力" value="{{old('price')}}">
                <div class="register-content_error">
                    @error('price')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-content">
                <div class="register-content_title">
                    <p class="register-content_name">商品画像</p>
                    <p class="register-content_required">必須</p>
                </div>
                <input type="file" name="image" class="register-content_input-file">
                <div class="register-content_error">
                    @error('image')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-content">
                <div class="register-content_title">
                    <p class="register-content_name">季節</p>
                    <p class="register-content_required">必須</p>
                    <p class="register-content_required-option">複数選択可</p>
                </div>
                <div class="register-content_season">
                    <div class="season">
                        <input class="register-content_season-input" type="checkbox" name="season" value="1" id="">
                        <label class="season-text">春</label>
                    </div>
                    <div class="season">
                        <input class="register-content_season-input" type="checkbox" name="season" value="2" id="">
                        <label class="season-text">夏</label>
                    </div>
                    <div class="season">
                        <input class="register-content_season-input" type="checkbox" name="season" value="3" id="">
                        <label class="season-text">秋</label>
                    </div>
                    <div class="season">
                        <input class="register-content_season-input" type="checkbox" name="season" value="4" id="">
                        <label class="season-text">冬</label>
                    </div>
                </div>
                <div class="register-content_error">
                    @error('season')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register-content">
                <div class="register-content_title">
                    <p class="register-content_name">商品説明</p>
                    <p class="register-content_required">必須</p>
                </div>
                <textarea name="description" class="register-content_input-content" placeholder="商品の説明を入力" value="{{old('description')}}"></textarea>
                <div class="register-content_error">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="button">
            <a href="/product" class="button-back">戻る</a>
            <button type="submit" class="button-register">登録</button>
        </div>
    </form>
</div>
@endsection
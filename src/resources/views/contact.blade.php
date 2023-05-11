@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-form">
<div class="contact-form__content">
    <div class="section__title">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf

        <x-validation-errors />

        {{-- 名前入力部分 --}}
        <table class="form-table">
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">お名前</span>
                    <span class="form-table__label--required">※</span>
                </div>
                </th>
                <td class="form-table__item--name">
                    <div class="form-table__input--name">
                    <div class="form-table__input--name--lastname">
                        <input type="text" name="lastname" value="{{ old('lastname') }}">
                        <p class="form-table__input--example">例) 山田</p>
                    </div>
                <div class="form-table__item--name--firstname">
                        <input type="text" name="firstname" value="{{ old('firstname') }}">
                        <p class="form-table__input--example">例) 太郎</p>
                </div>
                </div>
            </td>
            </tr>
            {{-- バリデーション --}}
                <div class="form__error">
                @error('fullname')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{$errors->first('fullname')}}
                    </td>
                </tr>
                @enderror
                </div>
        </div>
        {{-- ここまで名前 --}}
        {{-- 性別入力部分 --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">性別</span>
                    <span class="form-table__label--required">※</span>
                </div>
                </th>
                <td class="form-table__item--gender">
                    <div class="form-table__input--gender">
                        <input type="radio" name="gender" value="1" checked>男性
                        <input type="radio" name="gender" value="2">女性
                    </div>
                </td>
            </tr>
            {{-- バリデーション --}}
                <div class="form__error">
                @error('gender')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{$errors->first('gender')}}
                    </td>
                </tr>
                @enderror
                </div>
        </div>
        {{-- ここまで性別入力 --}}
        {{-- email --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">メールアドレス</span>
                    <span class="form-table__label--required">※</span>
                </div>
                </th>
                <td class="form-table__item--email">
                    <div class="form-table__input--email">
                        <input type="email" name="email" value="{{ old('email') }}">
                        <p class="form-table__input--example">例) test@example.com</p>
                    </div>
                </td>
            </tr>
            {{-- バリデーション --}}
                <div class="form__error">
                @error('email')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{$errors->first('email')}}
                    </td>
                </tr>
                @enderror
                </div>
        </div>
        {{-- ここまでemail --}}
        {{-- 郵便番号 --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--postcode">郵便番号</span>
                    <span class="form-table__label--required">※</span>
                </div>
                </th>
                <td class="form-table__item--postcode">
                    <div class="form-table__input--postcode">

                        <span>〒</span>
                        <input type="text" name="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{ old('postcode') }}">
                        <p class="form-table__input--example">例) 123-4567</p>
                    </div>
                </td>
            </tr>
            {{-- バリデーション --}}
                <div class="form__error">
                @error('postcode')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{$errors->first('postcode')}}
                    </td>
                </tr>
                @enderror
                </div>
        </div>
        {{--ここまで郵便番号 --}}
        {{-- 住所 --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--address">住所</span>
                    <span class="form-table__label--required">※</span>
                </div>
                </th>
                <td class="form-table__item--address">
                    <div class="form-table__input--address">
                        <input type="text" name="address" value="{{ old('address') }}">
                        <p class="form-table__input--example">例) 東京都渋谷区千駄ヶ谷1-2-3</p>
                    </div>
                </td>
            </tr>
            {{-- バリデーション --}}
                <div class="form__error">
                @error('address')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{$errors->first('address')}}
                    </td>
                </tr>
                @enderror
                </div>
        </div>
        {{-- ここまで住所 --}}
        {{-- 建物名 --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--building_name">建物名</span>
                </th>
                <td class="form-table__item--building_name">
                    <div class="form-table__input--building_name">
                        <input type="text" name="building_name" value="{{ old('building_name') }}">
                        <p class="form-table__input--example">例) 千駄ヶ谷マンション101</p>
                    </div>
                </td>
            </tr>
            {{-- バリデーション --}}
                <div class="form__error">
                @error('building_name')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{$errors->first('building_name')}}
                    </td>
                </tr>
                @enderror
                </div>
        </div>
        {{-- ここまで建物名 --}}
        {{-- テキストエリア --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--opinion">ご意見</span>
                    <span class="form-table__label--required">※</span>
                </div>
                </th>
                <td class="form-table__item--opinion">
                    <div class="form-table__input--opinion">
                        <textarea name="opinion">{{ old('opinion') }}
                        </textarea>
                    </div>
                </td>
            </tr>
            {{-- バリデーション --}}
                <div class="form__error">
                @error('opinion')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{$errors->first('opinion')}}
                    </td>
                </tr>
                @enderror
                </div>
        </div>
        {{-- ここまでテキストエリア --}}
        </table>
        {{-- 送信ボタン --}}
        <div class= "form-button">
            <button class="form-button__submit" type="submit">確認</button>
        </div>
    </form>
</div>
</div>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection
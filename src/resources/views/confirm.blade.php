@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="contact-form">
<div class="contact-form__content">
    <div class="section__title">
        <h2>内容確認</h2>
    </div>
    <form class="form" action="/contacts" method="post">
        @csrf
        {{-- 名前入力部分 --}}
        <table class="form-table">
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">お名前</span>
                </div>
                </th>
                <td class="form-table__item--name">
                    <div class="form-table__input--name">
                    <div class="form-table__input">
                        <input type="text" name="fullname" value="{{ $contact['fullname']}}" readonly>
                    </div>
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまで名前 --}}
        {{-- 性別入力部分 --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">性別</span>
                </div>
                </th>
                <td class="form-table__item--gender">
                    <div class="form-table__input">
                        <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly>
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまで性別入力 --}}
        {{-- email --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">メールアドレス</span>
                </div>
                </th>
                <td class="form-table__item--email">
                    <div class="form-table__input">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまでemail --}}
        {{-- 郵便番号 --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--postcode">郵便番号</span>
                </div>
                </th>
                <td class="form-table__item--postcode">
                    <div class="form-table__input">
                        <input type="text" name="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{ $contact['postcode'] }}" readonly>
                    </div>
                </td>
            </tr>
        </div>
        {{--ここまで郵便番号 --}}
        {{-- 住所 --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--address">住所</span>
                </div>
                </th>
                <td class="form-table__item--address">
                    <div class="form-table__input">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                    </div>
                </td>
            </tr>
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
                    <div class="form-table__input">
                        <input type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly>
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまで建物名 --}}
        {{-- テキストエリア --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--opinion">ご意見</span>
                </div>
                </th>
                <td class="form-table__item--opinion">
                    <div class="form-table__input">
                        <input type="text" name="opinion" value="{{ $contact['opinion'] }}" readonly>
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまでテキストエリア --}}
        </table>
        {{-- 送信ボタン --}}
        <div class= "form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
    <a class="form-correct" href="javascript:history.back()">修正する</a>

</div>
</div>

<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection
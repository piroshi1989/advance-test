@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
<div class="search-form">
<div class="search-form__content">
    <div class="section__title">
        <h2>管理システム</h2>
    </div>
    <div class=search-form__wrap>
    <form class="form" action="/search" method="get">
        @csrf
        <table class="form-table">
        <div class="form-table__group">
            <tr class="form-table__row-first">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">お名前</span>
                </div>
                </th>
                <td class="form-table__item--name">
                    <div class="form-table__input">
                        <input type="text" name="fullname" value="{{ old('fullname') }}">
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまで名前 --}}
        {{-- 性別入力部分 --}}
        <div class="form-table__group">
            <tr class="form-table__row-second">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">性別</span>
                </div>
                </th>
                <td class="form-table__item--gender">
                    <div class="form-table__input--radio">
                        <input type="radio" name="gender" value="all" checked>全て
                        <input type="radio" name="gender" value="1">男性
                        <input type="radio" name="gender" value="2">女性
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまで性別入力 --}}
        {{-- 登録日 --}}
        <div class="form-table__group">
            <tr class="form-table__row">
                <th class="form-table__th">
                <div class="form-table__group-title">
                    <span class="form-table__lavel--item">登録日</span>
                </div>
                </th>
                <td class="form-table__item--date">
                    <div class="form-table__input">
                        <input type="date" name="from">
                    </div>
                    <p class="form-table__input-">-</p>
                    <div class="form-table__input">
                        <input type="date" name="until">
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまで登録日 --}}
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
                        <input type="email" name="email" value={{ old('email') }}>
                    </div>
                </td>
            </tr>
        </div>
        {{-- ここまでemail --}}
        </table>
        {{-- 送信ボタン --}}
        <div class= "form__button">
            <button class="form__button-submit" type="submit">検索</button>
        </div>
    <a class="form-correct" href="/">リセット</a>
    </form>
    </div>
</div>
</div>
{{--database table--}}
<div class="contact-table">
    <table class="contact-table__inner">
    <tr class="contact-table__row">
        <th class="contact-table__header">
            <span class="contact-table__header-span">ID</span>
        </th>
        <th class="contact-table__header">
            <span class="contact-table__header-span">お名前</span>
        </th>
        <th class="contact-table__header">
            <span class="contact-table__header-span">性別</span>
        </th>
        <th class="contact-table__header">
            <span class="contact-table__header-span">メールアドレス</span>
        </th>
        <th class="contact-table__header">
            <span class="contact-table__header-span">ご意見</span>
      </tr>
      @foreach ($contacts as $contact)
      <tr class="contact-table__row">
{{-- 削除ボタン --}}
        <div class="contact-form__item">
        <td class="contact-table__item">
            <span class="contact-form__item-input">{{ $contact['id'] }}</span>
        </td>
        <td class="contact-table__item">
            <span class="contact-form__item-input">{{ $contact['fullname'] }}</span>
        </td>
        <td class="contact-table__item">
            <span class="contact-form__item-input">{{ $contact['gender'] }}</span>
        </td>
        <td class="contact-table__item">
        <span class="contact-form__item-input">{{ $contact['email'] }}</span>
        </td>
        <td class="contact-table__item">
        <span class="contact-form__item-input" onmouseover="this.textContent='{{ $contact['opinion'] }}'">{{ Str::limit($contact->opinion, 51) }}</span>
        </td>
        <td class="contact-table__item">
          <form class="delete-form" action="/" method="post">
            @method('DELETE')
            @csrf
            <div class="delete-form__button">
            <input type="hidden" name="id" value="{{ $contact['id'] }}">
              <button class="form__button-submit" type="submit">
                削除
              </button>
            </div>
          </form>
        </tr>
    @endforeach
    </table>
    {{ $contacts->links() }}
</div>
@endsection
@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
    <p class= "thanks__message">ご意見いただきありがとうございました。</p>
<div class= "form-button">
    <button class="form-button__submit" href="/">トップページへ</button>
@endsection
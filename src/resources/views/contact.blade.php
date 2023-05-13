@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('livewire')
@livewireStyles
@endsection

@section('content')
<div class="contact-form">
<div class="contact-form__content">
    <div class="section__title">
        <h2>お問い合わせ</h2>
    </div>
@livewire('validation-contact')
</div>
</div>

{{-- jsの記載 --}}
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src={{ asset('app.js') }}></script>
{{-- ここまでjs --}}
@endsection
@section('livewireScripts')
@livewireScripts
@endsection
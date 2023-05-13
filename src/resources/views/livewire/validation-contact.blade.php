<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>
<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
    <form class="form" action="contacts/confirm" method="post">
        @csrf

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
                        <input type="text" name="lastname" wire:model="lastname" value="{{ old('lastname') }}">
                        <p class="form-table__input--example">例) 山田</p>
                    </div>
                <div class="form-table__item--name--firstname">
                        <input type="text" name="firstname" wire:model="firstname"value="{{ old('firstname') }}">
                        <p class="form-table__input--example">例) 太郎</p>
                </div>
                </div>
            </td>
            </tr>
            {{-- バリデーション --}}
                <div class="form__error">
                @error('lastname')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{ $message }}
                    </td>
                </tr>
                @enderror
                @error('firstname')
                <tr>
                    <th style="background-color: red">ERROR</th>
                    <td>
                    {{ $message }}
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
                    <div class="form-table__input--radio">
                        <input type="radio" name="gender" value="1" wire:model="gender" checked>男性
                        <input type="radio" name="gender" value="2" wire:model="gender">女性
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
                    <span class="form-table__label--required">※</span>
                </div>
                </th>
                <td class="form-table__item--email">
                    <div class="form-table__input">
                        <input type="email" name="email" wire:model=="email" value="{{ old('email') }}">
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
                    {{ $message }}
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
                    <div class="form-table__input">

                        <span>〒</span>
                        <input type="text" name="postcode" od="postcode" wire:model="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{ old('postcode') }}">
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
                    {{ $message }}
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
                    <div class="form-table__input">
                        <input type="text" name="address" wire:model="address" value="{{ old('address') }}">
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
                    {{ $message }}
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
                    <div class="form-table__input">
                        <input type="text" name="building_name" wire:model="building_name" value="{{ old('building_name') }}">
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
                    {{ $message }}
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
                    <div class="form-table__input--textarea">
                        <textarea name="opinion" wire:model="opinion">{{ old('opinion') }}
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
                    {{ $message }}
                    </td>
                </tr>
                @enderror
                </div>
        </div>
        {{-- ここまでテキストエリア --}}
        </table>
        {{-- 送信ボタン --}}
        <div class= "form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
    </form>
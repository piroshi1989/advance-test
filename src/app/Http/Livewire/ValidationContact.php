<?php

namespace App\Http\Livewire;

use App\Http\Requests\ContactRequest;
use Livewire\Component;

class ValidationContact extends Component
{
    public $lastname;
    public $firstname;
    public $gender;
    public $email;
    public $postcode;
    public $address;
    public $building_name;
    public $opinion;


    // inputタグが更新された際に、validateを行う。
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function getError($propertyName)
    {
        $bag = $this->getErrorBag();
        return $bag->first($propertyName);
    }

    public function render()
    {
        return view('livewire.validation-contact');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['gender', 'email','postcode', 'address', 'building_name', 'opinion']);
        
        $name = $request->only(['lastname','firstname']);
        $fullname=["fullname" => $name['lastname'] .$name['firstname']];

        $contact = array_merge($contact, $fullname);

        return view('confirm', compact('contact'));
    }

    public function mount()
{
    $this->lastname = old('lastname');
    $this->firstname = old('firstname');
    $this->gender = old('gender');
    $this->email = old('email');
    $this->postcode = old('postcode');
    $this->address = old('address');
    $this->building_name = old('building_name');
    $this->opinion = old('opinion');
}

public function submit()
{
    // フォームの送信処理

    // フォームの送信後にリダイレクトして、プロパティをリセット
    return redirect()->route('form')->withInput();
}



}
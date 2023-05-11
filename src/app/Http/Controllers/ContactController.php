<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function contacts(){
        
        return view('contact');
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(['gender', 'email','postcode', 'address', 'building_name', 'opinion']);
        
        $name = $request->only(['lastname','firstname']);
        $fullname=["fullname" => $name['lastname'] .$name['firstname']];

        $contact = array_merge($contact, $fullname);

        return view('confirm', compact('contact'));
        
    }

    public function store(Request $request){
        $contact = $request->only(['gender', 'email','postcode', 'address', 'building_name', 'opinion']);
        
        $fullname = $request->only(['fullname']);

        $contact = array_merge($contact, $fullname);
        
        Contact::create($contact);
        
        return view('thanks');
    }

    public function index()
    {
        $contacts = Contact::all();
        $contacts = Contact::Paginate(10);
        
        return view('index', compact('contacts'));
    }

    public function search(Request $request){
        
        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $from = $request->input('from');
        $until = $request->input('until');
        
        $contacts = Contact::Contactsearch($fullname, $gender, $email, $from, $until)->get();
        $contacts = Contact::Paginate(10);

        return view('index', compact('contacts',));
    }


    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/');
    }

}
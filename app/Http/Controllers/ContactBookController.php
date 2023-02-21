<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactBook;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ContactBookController extends Controller
{
    public function index()
    {
        $contact_book = ContactBook::where('user_id', Auth::user()->id)->get();
        $data = compact('contact_book');
        return view('contact_book')->with($data);
    }
    public function addContact($profile_id)
    {
        $contact_book = new ContactBook();
        $contact_book->user_id = Auth::user()->id;
        $contact_book->profile_id = $profile_id;
        $contact_book->save();
        return redirect('/contact_book')->with('success', 'Contact added successfully');
    }
}

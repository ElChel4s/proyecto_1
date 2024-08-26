<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function showContacts()
    {
        $contacts = Contact::all();
        return view('admin.contacts', compact('contacts'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::with('categories')->get();
        $categories = Category::all();

        return view('index', compact('contacts', 'categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'content']);
        return view('confirm', ['content' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'gender', 'email', 'tell', 'address', 'building', 'detail', 'content']);
        Contact::create($contact);

        return view('thanks');
    }
}

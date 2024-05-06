<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->all();
        $item = Category::find($request->category_id);
        return view('confirm', compact('contact', 'item'));
    }

    public function store(Request $request)
    {
        $contact = $request->all();
        Contact::create($contact);
        return view ('thanks');
    }
}

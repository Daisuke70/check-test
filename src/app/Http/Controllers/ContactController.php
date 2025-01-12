<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\models\Contact;

class ContactController extends Controller
{
    public function index()
    {
    return view('index');
    }

    public function confirm(ContactRequest $request)
    {
    $contact = $request->only([
        'last-name', 'first-name', 'gender',
        'email', 'tel-1', 'tel-2', 'tel-3',
        'address', 'building', 'categories', 'detail'
        ]);
        return view('confirm', compact('contact'));
    }

    
    public function store(Request $request)
    {
    $contact = $request->only([
            'last-name', 'first-name', 'gender',
            'email', 'tel-1', 'tel-2', 'tel-3',
            'address', 'building', 'categories', 'detail'
            ]);
    Contact::create($contact);
    return view('thanks');
    }

}

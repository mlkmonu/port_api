<?php

namespace App\Http\Controllers\Api;
use App\Models\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // store

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'project_type' => 'nullable',
            'message' => 'required'
        ]);

        $contact = Contact::create($data);

        return response()->json([
            'message' => 'Form submitted successfully',
            'data' => $contact
        ]);
    }
}





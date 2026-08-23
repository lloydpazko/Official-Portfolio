<?php

namespace App\Http\Controllers;
use App\Models\Message;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Message::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Your message has been sent successfully!');
    }
}

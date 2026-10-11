<?php

namespace App\Http\Controllers;

use App\Models\WebsiteContent;
use Illuminate\Http\Request;

class AdminWebsiteContentController extends Controller
{
    public function index()
    {
        $contents = [
            'title' => WebsiteContent::getValue(
                'home',
                'title',
                'Lloyd Paliuanan'
            ),

            'subtitle' => WebsiteContent::getValue(
                'home',
                'subtitle',
                'Web Developer'
            ),

            'description' => WebsiteContent::getValue(
                'home',
                'description',
                ''
            ),
        ];

        return view('admin.website-content.home', compact('contents'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:5000'],
        ]);

        foreach ($validated as $key => $value) {
            WebsiteContent::setValue(
                'home',
                $key,
                $value,
                $key === 'description' ? 'textarea' : 'text'
            );
        }

        return redirect()
            ->route('admin.website-content.home')
            ->with('success', 'Home page content updated successfully!');
    }
}

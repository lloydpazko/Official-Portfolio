<?php

namespace App\Http\Controllers;

use App\Models\WebsiteContent;
use Illuminate\Http\Request;

class AdminWebsiteContentController extends Controller
{
    public function index()
    {
        $contents = [
            // Existing Home page fields
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

            // About Me fields
            'about_heading' => WebsiteContent::getValue(
                'about',
                'heading',
                'Building things that actually work.'
            ),

            'about_intro' => WebsiteContent::getValue(
                'about',
                'intro',
                "I'm a web developer focused on creating practical, reliable, and user-friendly web applications."
            ),

            'about_paragraph_1' => WebsiteContent::getValue(
                'about',
                'paragraph_1',
                'I enjoy turning ideas into functional websites and applications. My main focus is backend and full-stack web development, with a strong interest in PHP and Laravel.'
            ),

            'about_paragraph_2' => WebsiteContent::getValue(
                'about',
                'paragraph_2',
                'I work with databases, authentication, CRUD systems, REST APIs, responsive interfaces, and other features needed to build complete web applications.'
            ),

            'about_paragraph_3' => WebsiteContent::getValue(
                'about',
                'paragraph_3',
                "I'm continuously improving my skills by building real projects and exploring modern development tools and technologies."
            ),
        ];

        return view('admin.website-content.home', compact('contents'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            // Existing Home page validation
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:5000'],

            // About Me validation
            'about_heading' => ['required', 'string', 'max:255'],
            'about_intro' => ['nullable', 'string', 'max:5000'],
            'about_paragraph_1' => ['nullable', 'string', 'max:5000'],
            'about_paragraph_2' => ['nullable', 'string', 'max:5000'],
            'about_paragraph_3' => ['nullable', 'string', 'max:5000'],
        ]);

        foreach ($validated as $key => $value) {
            if (str_starts_with($key, 'about_')) {
                $group = 'about';
                $contentKey = substr($key, strlen('about_'));
            } else {
                $group = 'home';
                $contentKey = $key;
            }

            WebsiteContent::setValue(
                $group,
                $contentKey,
                $value,
                str_contains($key, 'description')
                    || str_contains($key, 'intro')
                    || str_contains($key, 'paragraph_')
                    ? 'textarea'
                    : 'text'
            );
        }

        return redirect()
            ->route('admin.website-content.home')
            ->with('success', 'Website content updated successfully!');
    }
}
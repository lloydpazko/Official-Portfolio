<?php

namespace App\Http\Controllers;

use App\Models\WebsiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

             // Profile Card fields
            'profile_initials' => WebsiteContent::getValue(
                'profile',
                'initials',
                'LP'
            ),

            'profile_name' => WebsiteContent::getValue(
                'profile',
                'name',
                'Lloyd Paliuanan'
            ),

            'profile_role' => WebsiteContent::getValue(
                'profile',
                'role',
                'Web Developer'
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

            // Profile Card validation
            'profile_initials' => ['nullable', 'string', 'max:10'],
            'profile_name' => ['nullable', 'string', 'max:255'],
            'profile_role' => ['nullable', 'string', 'max:255'],

            'profile_photo' => [
            'nullable',
            'image',
            'mimes:jpg,jpeg,png,webp',
            'max:5120',
        ],
        ]);

        unset($validated['profile_photo']);

        foreach ($validated as $key => $value) {
            if (str_starts_with($key, 'about_')) {
                $group = 'about';
                $contentKey = substr($key, strlen('about_'));
            } elseif (str_starts_with($key, 'profile_')) {
                $group = 'profile';
                $contentKey = substr($key, strlen('profile_'));
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

         if ($request->hasFile('profile_photo')) {
            $oldPhoto = WebsiteContent::getValue('profile', 'photo');

            $photoPath = $request->file('profile_photo')
                ->store('profile', 'public');

            WebsiteContent::setValue(
                'profile',
                'photo',
                $photoPath,
                'image'
            );

            if ($oldPhoto) {
                Storage::disk('public')->delete($oldPhoto);
            }
        }

        return redirect()
            ->route('admin.website-content.home')
            ->with('success', 'Website content updated successfully!');
    }
}
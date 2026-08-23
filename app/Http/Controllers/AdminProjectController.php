<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:projects,slug',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        'url' => 'nullable|url|max:255',
        'technologies' => 'nullable|string|max:255',
        'is_featured' => 'nullable|boolean',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')
            ->store('projects', 'public');
    }

        Project::create($validated);

        return redirect()
            ->route('admin.projects')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:projects,slug,' . $project->id,
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        'url' => 'nullable|url|max:255',
        'technologies' => 'nullable|string|max:255',
        'is_featured' => 'nullable|boolean',
    ]);

    if ($request->hasFile('image')) {

        // Delete old image
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        // Store new image
        $validated['image'] = $request->file('image')
            ->store('projects', 'public');
    }

    $project->update($validated);

        return redirect()
            ->route('admin.projects')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
    if ($project->image) {
        Storage::disk('public')->delete($project->image);
    }

    $project->delete();

    return redirect()
        ->route('admin.projects')
        ->with('success', 'Project deleted successfully.');
    }
}
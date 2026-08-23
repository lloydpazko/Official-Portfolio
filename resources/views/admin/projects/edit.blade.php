@extends('admin.layouts.App')

@section('title', 'Edit Project')
@section('page_title', 'Edit Project')

@section('content')

```
{{-- Header --}}
<div class="mb-8 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
            Portfolio
        </p>

        <h1 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
            Edit Project
        </h1>

        <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-400">
            Update the information and settings for this project.
        </p>
    </div>

    <a
        href="{{ route('admin.projects') }}"
        class="inline-flex w-fit items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white"
    >
        ← Back to Projects
    </a>

</div>


{{-- Validation Errors --}}
@if ($errors->any())

    <div class="mb-6 rounded-2xl border border-red-500/20 bg-red-500/10 p-5">

        <div class="flex gap-3">

            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-500/10 text-red-400">
                !
            </div>

            <div>

                <p class="text-sm font-semibold text-red-400">
                    Please fix the following errors:
                </p>

                <ul class="mt-2 list-inside list-disc space-y-1 text-sm text-red-300">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        </div>

    </div>

@endif


{{-- Success --}}
@if (session('success'))

    <div class="mb-6 rounded-2xl border border-emerald-500/20 bg-emerald-500/10 px-5 py-4">

        <p class="text-sm font-medium text-emerald-400">
            ✓ {{ session('success') }}
        </p>

    </div>

@endif


{{-- Form --}}
<form
    action="{{ route('admin.projects.update', $project) }}"
    method="POST"
    enctype="multipart/form-data"
>

    @csrf
    @method('PUT')


    <div class="grid gap-6 xl:grid-cols-3">


        {{-- Main --}}
        <div class="space-y-6 xl:col-span-2">


            {{-- Project Information --}}
            <section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

                <div class="border-b border-white/10 px-6 py-5">

                    <div class="flex items-center gap-4">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-500/10 text-xl">
                            📁
                        </div>

                        <div>

                            <h2 class="text-lg font-bold text-white">
                                Project Information
                            </h2>

                            <p class="mt-1 text-xs text-slate-500">
                                Update your project's basic information.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="space-y-5 p-6">


                    {{-- Title --}}
                    <div>

                        <label
                            for="title"
                            class="mb-2 block text-sm font-semibold text-slate-300"
                        >
                            Project Title
                        </label>

                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title', $project->title) }}"
                            required
                            class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                        >

                    </div>


                    {{-- Slug --}}
                    <div>

                        <label
                            for="slug"
                            class="mb-2 block text-sm font-semibold text-slate-300"
                        >
                            Slug
                        </label>

                        <input
                            type="text"
                            id="slug"
                            name="slug"
                            value="{{ old('slug', $project->slug) }}"
                            required
                            class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                        >

                        <p class="mt-2 text-xs text-slate-600">
                            Used for the project's public URL.
                        </p>

                    </div>


                    {{-- Description --}}
                    <div>

                        <label
                            for="description"
                            class="mb-2 block text-sm font-semibold text-slate-300"
                        >
                            Description
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="7"
                            required
                            class="w-full resize-y rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm leading-6 text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                        >{{ old('description', $project->description) }}</textarea>

                    </div>


                    {{-- URL --}}
                    <div>

                        <label
                            for="url"
                            class="mb-2 block text-sm font-semibold text-slate-300"
                        >
                            Live Project URL
                        </label>

                        <input
                            type="url"
                            id="url"
                            name="url"
                            value="{{ old('url', $project->url) }}"
                            placeholder="https://example.com"
                            class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                        >

                    </div>


                    {{-- Technologies --}}
                    <div>

                        <label
                            for="technologies"
                            class="mb-2 block text-sm font-semibold text-slate-300"
                        >
                            Technologies
                        </label>

                        <input
                            type="text"
                            id="technologies"
                            name="technologies"
                            value="{{ old('technologies', $project->technologies) }}"
                            placeholder="Laravel, PHP, MySQL, Tailwind CSS"
                            class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                        >

                        <p class="mt-2 text-xs text-slate-600">
                            Separate technologies using commas.
                        </p>

                    </div>

                </div>

            </section>


            {{-- Project Image --}}
            <section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

                <div class="border-b border-white/10 px-6 py-5">

                    <div class="flex items-center gap-4">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-500/10 text-xl">
                            🖼️
                        </div>

                        <div>

                            <h2 class="text-lg font-bold text-white">
                                Project Image
                            </h2>

                            <p class="mt-1 text-xs text-slate-500">
                                Replace the current project image if needed.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="p-6">


                    {{-- Current Image --}}
                    @if ($project->image)

                        <div class="mb-5 overflow-hidden rounded-2xl border border-white/10 bg-slate-950">

                            <img
                                src="{{ asset('storage/' . $project->image) }}"
                                alt="{{ $project->title }}"
                                class="max-h-[420px] w-full object-cover"
                            >

                        </div>

                        <div class="mb-5 flex items-center gap-2">

                            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>

                            <p class="text-xs text-slate-500">
                                Current project image
                            </p>

                        </div>

                    @endif


                    {{-- Upload --}}
                    <label
                        for="image"
                        class="group flex cursor-pointer flex-col items-center justify-center rounded-2xl border border-dashed border-white/10 bg-slate-950/40 px-6 py-10 text-center transition hover:border-blue-500/40 hover:bg-blue-500/[0.03]"
                    >

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500/10 text-2xl transition group-hover:scale-105">
                            📷
                        </div>

                        <p class="mt-4 text-sm font-semibold text-slate-300">
                            Choose a new image
                        </p>

                        <p class="mt-2 text-xs text-slate-600">
                            Leave empty to keep the current image
                        </p>

                        <span class="mt-4 rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold text-slate-400 transition group-hover:bg-white/10 group-hover:text-white">
                            Browse Files
                        </span>

                        <input
                            type="file"
                            id="image"
                            name="image"
                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                            class="hidden"
                        >

                    </label>

                    <p class="mt-3 text-center text-xs text-slate-600">
                        JPG, JPEG, PNG, or WEBP • Maximum 5 MB
                    </p>

                </div>

            </section>

        </div>


        {{-- Sidebar --}}
        <div class="space-y-6">


            {{-- Project Status --}}
            <section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

                <div class="border-b border-white/10 px-6 py-5">

                    <h2 class="text-lg font-bold text-white">
                        Project Status
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Control how the project is highlighted.
                    </p>

                </div>


                <div class="p-6">

                    <label class="flex cursor-pointer gap-3">

                        <input
                            type="checkbox"
                            name="is_featured"
                            value="1"
                            {{ old('is_featured', $project->is_featured) ? 'checked' : '' }}
                            class="mt-0.5 h-5 w-5 rounded border-white/20 bg-slate-950 text-blue-600 focus:ring-blue-500"
                        >

                        <span>

                            <span class="block text-sm font-semibold text-white">
                                Featured Project
                            </span>

                            <span class="mt-1 block text-xs leading-5 text-slate-500">
                                Highlight this project on your portfolio homepage.
                            </span>

                        </span>

                    </label>

                </div>

            </section>


            {{-- Actions --}}
            <section class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">

                <h2 class="text-sm font-bold text-white">
                    Actions
                </h2>

                <div class="mt-4 space-y-3">

                    <button
                        type="submit"
                        class="flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30"
                    >
                        Save Changes
                        <span>✓</span>
                    </button>


                    <a
                        href="{{ route('admin.projects') }}"
                        class="flex w-full items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-400 transition hover:bg-white/10 hover:text-white"
                    >
                        Cancel
                    </a>

                </div>

            </section>


            {{-- Project Info --}}
            <section class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">

                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600">
                    Project ID
                </p>

                <p class="mt-2 font-mono text-sm text-slate-400">
                    #{{ $project->id }}
                </p>

            </section>

        </div>

    </div>

</form>
```5

@endsection

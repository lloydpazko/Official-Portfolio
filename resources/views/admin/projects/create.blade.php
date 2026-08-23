@extends('admin.layouts.App')

@section('title', 'Create Project')
@section('page_title', 'Create Project')

@section('content')

```
{{-- Header --}}
<div class="mb-8 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
            Portfolio
        </p>

        <h1 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
            Create Project
        </h1>

        <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-400">
            Add a new project to your portfolio.
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


{{-- Form --}}
<form
    action="{{ route('admin.projects.store') }}"
    method="POST"
    enctype="multipart/form-data"
>

    @csrf


    <div class="grid gap-6 xl:grid-cols-3">


        {{-- Main Information --}}
        <div class="space-y-6 xl:col-span-2">

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
                                Basic information about your project.
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
                            value="{{ old('title') }}"
                            required
                            placeholder="e.g. Personal Portfolio Website"
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
                            value="{{ old('slug') }}"
                            required
                            placeholder="personal-portfolio-website"
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
                            placeholder="Describe the project, its purpose, features, and what you built."
                            class="w-full resize-y rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm leading-6 text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                        >{{ old('description') }}</textarea>

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
                            value="{{ old('url') }}"
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
                            value="{{ old('technologies') }}"
                            placeholder="Laravel, PHP, MySQL, Tailwind CSS"
                            class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                        >

                        <p class="mt-2 text-xs text-slate-600">
                            Separate technologies using commas.
                        </p>

                    </div>

                </div>

            </section>


            {{-- Image --}}
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
                                Upload the main image for this project.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="p-6">

                    <label
                        for="image"
                        class="group flex cursor-pointer flex-col items-center justify-center rounded-2xl border border-dashed border-white/10 bg-slate-950/40 px-6 py-12 text-center transition hover:border-blue-500/40 hover:bg-blue-500/[0.03]"
                    >

                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500/10 text-2xl transition group-hover:scale-105">
                            📷
                        </div>

                        <p class="mt-4 text-sm font-semibold text-slate-300">
                            Choose project image
                        </p>

                        <p class="mt-2 text-xs text-slate-600">
                            JPG, JPEG, PNG, or WEBP • Maximum 5 MB
                        </p>

                        <span class="mt-5 rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold text-slate-400 transition group-hover:bg-white/10 group-hover:text-white">
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

                </div>

            </section>

        </div>


        {{-- Sidebar --}}
        <div class="space-y-6">


            {{-- Publishing --}}
            <section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

                <div class="border-b border-white/10 px-6 py-5">

                    <h2 class="text-lg font-bold text-white">
                        Publishing
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Configure how this project appears.
                    </p>

                </div>


                <div class="p-6">

                    <label class="flex cursor-pointer gap-3">

                        <input
                            type="checkbox"
                            name="is_featured"
                            value="1"
                            {{ old('is_featured') ? 'checked' : '' }}
                            class="mt-0.5 h-5 w-5 rounded border-white/20 bg-slate-950 text-blue-600 focus:ring-blue-500"
                        >

                        <span>

                            <span class="block text-sm font-semibold text-white">
                                Featured Project
                            </span>

                            <span class="mt-1 block text-xs leading-5 text-slate-500">
                                Highlight this project on the homepage.
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
                        Create Project
                        <span>→</span>
                    </button>


                    <a
                        href="{{ route('admin.projects') }}"
                        class="flex w-full items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-400 transition hover:bg-white/10 hover:text-white"
                    >
                        Cancel
                    </a>

                </div>

            </section>

        </div>

    </div>

</form>
```

@endsection

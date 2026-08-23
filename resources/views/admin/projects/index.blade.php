@extends('admin.layouts.App')

@section('title', 'Projects')
@section('page_title', 'Projects Management')

@section('content')

```
{{-- Header --}}
<div class="mb-8 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

    <div>
        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
            Portfolio
        </p>

        <h1 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
            Projects
        </h1>

        <p class="mt-3 text-sm leading-6 text-slate-400">
            Manage the projects displayed on your portfolio.
        </p>
    </div>


    {{-- Add Project --}}
    <a
        href="{{ route('admin.projects.create') }}"
        class="inline-flex w-fit items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-500"
    >
        <span class="text-lg leading-none">+</span>
        Add Project
    </a>

</div>


{{-- Stats --}}
<div class="mb-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

    {{-- Total --}}
    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">

        <div class="flex items-center justify-between">

            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Total Projects
                </p>

                <p class="mt-2 text-3xl font-black text-white">
                    {{ $projects->count() }}
                </p>
            </div>

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-500/10 text-xl">
                📁
            </div>

        </div>

    </div>


    {{-- Featured --}}
    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">

        <div class="flex items-center justify-between">

            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Featured
                </p>

                <p class="mt-2 text-3xl font-black text-white">
                    {{ $projects->where('is_featured', true)->count() }}
                </p>
            </div>

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-500/10 text-xl">
                ⭐
            </div>

        </div>

    </div>


    {{-- Regular --}}
    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">

        <div class="flex items-center justify-between">

            <div>
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Regular Projects
                </p>

                <p class="mt-2 text-3xl font-black text-white">
                    {{ $projects->where('is_featured', false)->count() }}
                </p>
            </div>

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-slate-500/10 text-xl">
                🗂️
            </div>

        </div>

    </div>

</div>


{{-- Success Message --}}
@if (session('success'))

    <div class="mb-6 rounded-2xl border border-emerald-500/20 bg-emerald-500/10 px-5 py-4">

        <div class="flex items-center gap-3">

            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400">
                ✓
            </div>

            <p class="text-sm font-medium text-emerald-400">
                {{ session('success') }}
            </p>

        </div>

    </div>

@endif


{{-- Projects --}}
<div class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

    <div class="border-b border-white/10 px-6 py-5">

        <h2 class="text-lg font-bold text-white">
            All Projects
        </h2>

        <p class="mt-1 text-xs text-slate-500">
            Projects currently available in your portfolio.
        </p>

    </div>


    @if ($projects->count())

        <div class="divide-y divide-white/10">

            @foreach ($projects as $project)

                <div class="p-5 transition hover:bg-white/[0.02] sm:p-6">

                    <div class="flex flex-col gap-5 lg:flex-row lg:items-center">


                        {{-- Image --}}
                        <div class="h-28 w-full shrink-0 overflow-hidden rounded-xl border border-white/10 bg-slate-900 sm:w-44">

                            @if ($project->image)

                                <img
                                    src="{{ asset('storage/' . $project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="h-full w-full object-cover"
                                >

                            @else

                                <div class="flex h-full items-center justify-center text-xs text-slate-600">
                                    No Image
                                </div>

                            @endif

                        </div>


                        {{-- Information --}}
                        <div class="min-w-0 flex-1">

                            <div class="flex flex-wrap items-center gap-2">

                                <h3 class="text-lg font-bold text-white">
                                    {{ $project->title }}
                                </h3>

                                @if ($project->is_featured)

                                    <span class="rounded-full border border-amber-500/20 bg-amber-500/10 px-2.5 py-1 text-[11px] font-semibold text-amber-400">
                                        ⭐ Featured
                                    </span>

                                @endif

                            </div>


                            @if ($project->description)

                                <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-400">
                                    {{ $project->description }}
                                </p>

                            @endif


                            {{-- Technologies --}}
                            @if ($project->technologies)

                                <div class="mt-3 flex flex-wrap gap-2">

                                    @foreach (explode(',', $project->technologies) as $technology)

                                        <span class="rounded-lg border border-white/10 bg-white/5 px-2.5 py-1 text-[11px] font-medium text-slate-400">
                                            {{ trim($technology) }}
                                        </span>

                                    @endforeach

                                </div>

                            @endif

                        </div>


                        {{-- Actions --}}
                        <div class="flex shrink-0 flex-wrap gap-2 lg:flex-col">

                            <a
                                href="{{ route('admin.projects.edit', $project) }}"
                                class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white"
                            >
                                Edit
                            </a>


                            <form
                                action="{{ route('admin.projects.destroy', $project) }}"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this project?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="inline-flex w-full items-center justify-center rounded-xl border border-red-500/20 bg-red-500/5 px-4 py-2.5 text-sm font-semibold text-red-400 transition hover:bg-red-500/10"
                                >
                                    Delete
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        {{-- Empty State --}}
        <div class="px-6 py-16 text-center">

            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500/10 text-2xl">
                🚀
            </div>

            <h3 class="mt-5 text-xl font-bold text-white">
                No projects yet
            </h3>

            <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                Start building your portfolio by adding your first project.
            </p>

            <a
                href="{{ route('admin.projects.create') }}"
                class="mt-6 inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-500"
            >
                + Add Your First Project
            </a>

        </div>

    @endif

</div>
```

@endsection

@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('page_title', 'Dashboard')

@section('content')

    {{-- Welcome Header --}}
    <div class="mb-8">

        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">

            <div>

                <p class="text-sm font-medium text-blue-400">
                    Admin Overview
                </p>

                <h1 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
                    Welcome back, {{ auth()->user()->name ?? 'Administrator' }} 👋
                </h1>

                <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-400">
                    Manage your portfolio, projects, messages, documents,
                    and website content from one place.
                </p>

            </div>

            <a
                href="{{ route('home') }}"
                target="_blank"
                class="inline-flex w-fit items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white"
            >
                <span>View Portfolio</span>
                <span>↗</span>
            </a>

        </div>

    </div>


    {{-- Statistics --}}
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">


        {{-- Projects --}}
        <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 shadow-xl shadow-black/10">

            <div class="flex items-start justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-400">
                        Projects
                    </p>

                    <p class="mt-3 text-3xl font-black text-white">
                        {{ \App\Models\Project::count() }}
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-500/10 text-xl">
                    📁
                </div>

            </div>

            <a
                href="{{ route('admin.projects') }}"
                class="mt-5 inline-flex text-xs font-semibold text-blue-400 transition hover:text-blue-300"
            >
                Manage projects →
            </a>

        </div>


        {{-- Messages --}}
        <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 shadow-xl shadow-black/10">

            <div class="flex items-start justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-400">
                        Messages
                    </p>

                    <p class="mt-3 text-3xl font-black text-white">
                        0
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-500/10 text-xl">
                    💬
                </div>

            </div>

            <a
                href="{{ route('admin.messages') }}"
                class="mt-5 inline-flex text-xs font-semibold text-cyan-400 transition hover:text-cyan-300"
            >
                View messages →
            </a>

        </div>


        {{-- Documents --}}
        <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 shadow-xl shadow-black/10">

            <div class="flex items-start justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-400">
                        Documents
                    </p>

                    <p class="mt-3 text-3xl font-black text-white">
                        0
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-violet-500/10 text-xl">
                    📄
                </div>

            </div>

            <p class="mt-5 text-xs font-medium text-slate-600">
                Document manager coming soon
            </p>

        </div>


        {{-- Website --}}
        <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-5 shadow-xl shadow-black/10">

            <div class="flex items-start justify-between">

                <div>

                    <p class="text-sm font-medium text-slate-400">
                        Website
                    </p>

                    <p class="mt-3 text-lg font-black text-emerald-400">
                        Online
                    </p>

                </div>

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-500/10 text-xl">
                    🌐
                </div>

            </div>

            <a
                href="{{ route('home') }}"
                target="_blank"
                class="mt-5 inline-flex text-xs font-semibold text-emerald-400 transition hover:text-emerald-300"
            >
                Open website →
            </a>

        </div>

    </div>


    {{-- Main Dashboard Grid --}}
    <div class="mt-6 grid gap-6 xl:grid-cols-3">


        {{-- Recent Projects --}}
        <div class="xl:col-span-2 rounded-2xl border border-white/10 bg-slate-900/60 shadow-xl shadow-black/10">

            <div class="flex items-center justify-between border-b border-white/10 px-6 py-5">

                <div>

                    <h2 class="text-base font-bold text-white">
                        Recent Projects
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Your latest portfolio projects.
                    </p>

                </div>

                <a
                    href="{{ route('admin.projects') }}"
                    class="text-xs font-semibold text-blue-400 transition hover:text-blue-300"
                >
                    View all →
                </a>

            </div>


            <div class="p-6">

                @php
                    $recentProjects = \App\Models\Project::latest()->take(5)->get();
                @endphp


                @if ($recentProjects->count())

                    <div class="space-y-3">

                        @foreach ($recentProjects as $project)

                            <div class="flex items-center gap-4 rounded-xl border border-white/5 bg-white/[0.02] p-4 transition hover:bg-white/[0.04]">

                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-lg">
                                    📁
                                </div>

                                <div class="min-w-0 flex-1">

                                    <p class="truncate text-sm font-semibold text-white">
                                        {{ $project->title }}
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        {{ $project->created_at?->format('M d, Y') ?? 'Recently added' }}
                                    </p>

                                </div>

                                <a
                                    href="{{ route('admin.projects.edit', $project) }}"
                                    class="rounded-lg border border-white/10 px-3 py-2 text-xs font-semibold text-slate-400 transition hover:bg-white/5 hover:text-white"
                                >
                                    Edit
                                </a>

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="py-10 text-center">

                        <div class="text-4xl">
                            📁
                        </div>

                        <h3 class="mt-4 text-sm font-bold text-white">
                            No projects yet
                        </h3>

                        <p class="mx-auto mt-2 max-w-sm text-xs leading-5 text-slate-500">
                            Your latest portfolio projects will appear here once
                            you start adding them.
                        </p>

                        <a
                            href="{{ route('admin.projects.create') }}"
                            class="mt-5 inline-flex rounded-xl bg-blue-600 px-4 py-2.5 text-xs font-bold text-white transition hover:bg-blue-500"
                        >
                            Add Your First Project
                        </a>

                    </div>

                @endif

            </div>

        </div>


        {{-- Quick Actions --}}
        <div class="rounded-2xl border border-white/10 bg-slate-900/60 shadow-xl shadow-black/10">

            <div class="border-b border-white/10 px-6 py-5">

                <h2 class="text-base font-bold text-white">
                    Quick Actions
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Common portfolio management tasks.
                </p>

            </div>


            <div class="space-y-2 p-4">


                {{-- Add Project --}}
                <a
                    href="{{ route('admin.projects.create') }}"
                    class="group flex items-center gap-4 rounded-xl border border-white/5 bg-white/[0.02] p-4 transition hover:border-blue-500/20 hover:bg-blue-500/5"
                >

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/10 text-lg">
                        ➕
                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm font-semibold text-white">
                            Add Project
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Create a new portfolio project.
                        </p>

                    </div>

                    <span class="text-slate-600 transition group-hover:text-blue-400">
                        →
                    </span>

                </a>


                {{-- Messages --}}
                <a
                    href="{{ route('admin.messages') }}"
                    class="group flex items-center gap-4 rounded-xl border border-white/5 bg-white/[0.02] p-4 transition hover:border-cyan-500/20 hover:bg-cyan-500/5"
                >

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-cyan-500/10 text-lg">
                        💬
                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm font-semibold text-white">
                            Check Messages
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            View messages from visitors.
                        </p>

                    </div>

                    <span class="text-slate-600 transition group-hover:text-cyan-400">
                        →
                    </span>

                </a>


                {{-- Account --}}
                <a
                    href="{{ route('admin.account') }}"
                    class="group flex items-center gap-4 rounded-xl border border-white/5 bg-white/[0.02] p-4 transition hover:border-violet-500/20 hover:bg-violet-500/5"
                >

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-500/10 text-lg">
                        👤
                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm font-semibold text-white">
                            Manage Account
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Update your admin profile.
                        </p>

                    </div>

                    <span class="text-slate-600 transition group-hover:text-violet-400">
                        →
                    </span>

                </a>


                {{-- Website --}}
                <a
                    href="{{ route('home') }}"
                    target="_blank"
                    class="group flex items-center gap-4 rounded-xl border border-white/5 bg-white/[0.02] p-4 transition hover:border-emerald-500/20 hover:bg-emerald-500/5"
                >

                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-500/10 text-lg">
                        🌐
                    </div>

                    <div class="min-w-0 flex-1">

                        <p class="text-sm font-semibold text-white">
                            View Portfolio
                        </p>

                        <p class="mt-1 text-xs text-slate-500">
                            Open the public website.
                        </p>

                    </div>

                    <span class="text-slate-600 transition group-hover:text-emerald-400">
                        ↗
                    </span>

                </a>

            </div>

        </div>

    </div>


    {{-- Coming Soon Section --}}
    <div class="mt-6 rounded-2xl border border-dashed border-white/10 bg-slate-900/30 p-6">

        <div class="flex flex-col gap-5 sm:flex-row sm:items-center">

            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-xl">
                🚀
            </div>

            <div class="flex-1">

                <h2 class="text-sm font-bold text-white">
                    Portfolio CMS is coming together
                </h2>

                <p class="mt-1 text-xs leading-5 text-slate-500">
                    Website Content, Documents, Backups, and other
                    management tools will be added in the next phases.
                </p>

            </div>

            <div class="shrink-0 rounded-lg bg-white/5 px-3 py-2 text-[10px] font-semibold uppercase tracking-wider text-slate-500">
                Phase 1
            </div>

        </div>

    </div>

@endsection
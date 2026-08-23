@extends('layouts.app')

@section('title', 'Home | Lloyd Paliuanan')

@section('content')

{{-- HERO --}}
{{-- Hero --}}
<section class="relative isolate min-h-[calc(100vh-80px)] overflow-hidden">

    {{-- Background Glow --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute left-1/2 top-0 h-[500px] w-[500px] -translate-x-1/2 rounded-full bg-blue-600/20 blur-[120px]"></div>
        <div class="absolute -right-40 top-1/3 h-[400px] w-[400px] rounded-full bg-purple-600/10 blur-[100px]"></div>
        <div class="absolute -left-40 bottom-0 h-[350px] w-[350px] rounded-full bg-cyan-600/10 blur-[100px]"></div>
    </div>

    <div class="mx-auto grid min-h-[calc(100vh-80px)] max-w-7xl items-center gap-16 px-6 py-20 lg:grid-cols-[1.15fr_0.85fr] lg:px-8">

        {{-- Introduction --}}
        <div class="max-w-3xl">

            <div class="mb-6 inline-flex items-center gap-3 rounded-full border border-blue-500/20 bg-blue-500/5 px-4 py-2">

                <span class="h-2 w-2 animate-pulse rounded-full bg-green-400"></span>

                <span class="text-sm font-medium text-slate-300">
                    Available for freelance opportunities
                </span>

            </div>


            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-blue-400">
                Web Developer
            </p>


            <h1 class="mt-5 text-5xl font-black leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl">

                Hello, I'm

                <span class="block bg-gradient-to-r from-blue-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent">
                    Lloyd Paliuanan.
                </span>

            </h1>


            <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-400 sm:text-xl">
                I build modern, functional, and user-friendly web applications
                using PHP, Laravel, MySQL, and modern web technologies.
            </p>


            {{-- Buttons --}}
            <div class="mt-9 flex flex-wrap gap-4">

                <a
                    href="{{ route('projects') }}"
                    class="group inline-flex items-center gap-2 rounded-xl bg-blue-600 px-6 py-3.5 font-semibold shadow-lg shadow-blue-600/20 transition hover:-translate-y-0.5 hover:bg-blue-500"
                >
                    View My Projects

                    <span class="transition-transform group-hover:translate-x-1">
                        →
                    </span>
                </a>


                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center rounded-xl border border-white/10 bg-white/5 px-6 py-3.5 font-semibold text-slate-200 backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/10"
                >
                    Contact Me
                </a>

            </div>


            {{-- Social Links --}}
            <div class="mt-10 flex flex-wrap items-center gap-6 text-sm text-slate-500">

                <span>
                    Connect with me
                </span>

                <a
                    href="#"
                    class="transition hover:text-white"
                >
                    Facebook
                </a>

                <a
                    href="#"
                    class="transition hover:text-white"
                >
                    GitHub
                </a>

                <a
                    href="#"
                    class="transition hover:text-white"
                >
                    LinkedIn
                </a>

            </div>

        </div>


        {{-- Developer Card --}}
        <div class="relative mx-auto w-full max-w-md lg:ml-auto">

            {{-- Glow --}}
            <div class="absolute -inset-4 rounded-[2rem] bg-blue-600/20 blur-3xl"></div>


            <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-slate-900/70 p-7 shadow-2xl shadow-black/30 backdrop-blur-xl">

                {{-- Card Header --}}
                <div class="flex items-center gap-4">

                    <div class="flex h-16 w-16 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 text-xl font-black shadow-lg shadow-blue-500/20">
                        LP
                    </div>

                    <div>

                        <h2 class="text-xl font-bold">
                            Lloyd Paliuanan
                        </h2>

                        <p class="mt-1 text-sm text-slate-400">
                            PHP / Laravel Developer
                        </p>

                    </div>

                </div>


                {{-- Divider --}}
                <div class="my-7 h-px bg-white/10"></div>


                {{-- Stack --}}
                <div>

                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                        Primary Stack
                    </p>

                    <div class="mt-4 flex flex-wrap gap-2">

                        <span class="rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm font-medium text-slate-300">
                            PHP
                        </span>

                        <span class="rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm font-medium text-slate-300">
                            Laravel
                        </span>

                        <span class="rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm font-medium text-slate-300">
                            MySQL
                        </span>

                        <span class="rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm font-medium text-slate-300">
                            JavaScript
                        </span>

                    </div>

                </div>


                {{-- Stats --}}
                <div class="mt-8 grid grid-cols-2 gap-3">

                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">

                        <p class="text-xs text-slate-500">
                            Focus
                        </p>

                        <p class="mt-1 font-semibold">
                            Web Development
                        </p>

                    </div>


                    <div class="rounded-xl border border-white/10 bg-white/5 p-4">

                        <p class="text-xs text-slate-500">
                            Status
                        </p>

                        <p class="mt-1 font-semibold text-green-400">
                            Available
                        </p>

                    </div>

                </div>


                {{-- Bottom --}}
                <div class="mt-6 flex items-center justify-between rounded-xl border border-blue-500/10 bg-blue-500/5 px-4 py-3">

                    <span class="text-sm text-slate-400">
                        Currently building
                    </span>

                    <span class="text-sm font-semibold text-blue-400">
                        Laravel Apps
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- About --}}
<section id="about" class="relative overflow-hidden border-t border-white/10 py-24 sm:py-32">

    <div class="pointer-events-none absolute left-0 top-1/2 -z-10 h-96 w-96 -translate-y-1/2 rounded-full bg-blue-600/10 blur-[120px]"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="max-w-2xl">

            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-blue-400">
                About Me
            </p>

            <h2 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">
                Building things that
                <span class="text-blue-400">
                    actually work.
                </span>
            </h2>

            <p class="mt-5 text-lg leading-8 text-slate-400">
                I'm a web developer focused on creating practical,
                reliable, and user-friendly web applications.
            </p>

        </div>


        {{-- Content --}}
        <div class="mt-14 grid gap-6 lg:grid-cols-3">

            {{-- Main About Card --}}
            <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03] p-8 lg:col-span-2">

                <div class="absolute right-0 top-0 h-40 w-40 rounded-full bg-blue-500/10 blur-3xl"></div>

                <div class="relative">

                    <div class="flex items-center gap-4">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-lg font-bold text-blue-400">
                            LP
                        </div>

                        <div>
                            <p class="font-semibold">
                                Lloyd Paliuanan
                            </p>

                            <p class="text-sm text-slate-500">
                                Web Developer
                            </p>
                        </div>

                    </div>


                    <div class="mt-8 space-y-5 text-base leading-8 text-slate-400">

                        <p>
                            I enjoy turning ideas into functional websites and
                            applications. My main focus is backend and full-stack
                            web development, with a strong interest in PHP and Laravel.
                        </p>

                        <p>
                            I work with databases, authentication, CRUD systems,
                            REST APIs, responsive interfaces, and other features
                            needed to build complete web applications.
                        </p>

                        <p>
                            I'm continuously improving my skills by building real
                            projects and exploring modern development tools and
                            technologies.
                        </p>

                    </div>


                    {{-- Highlights --}}
                    <div class="mt-8 grid gap-3 sm:grid-cols-3">

                        <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-4">

                            <p class="text-2xl font-bold text-blue-400">
                                PHP
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Backend Development
                            </p>

                        </div>


                        <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-4">

                            <p class="text-2xl font-bold text-blue-400">
                                Laravel
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Web Framework
                            </p>

                        </div>


                        <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-4">

                            <p class="text-2xl font-bold text-blue-400">
                                MySQL
                            </p>

                            <p class="mt-1 text-xs text-slate-500">
                                Database
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Quick Info --}}
            <div class="space-y-6">

                {{-- What I Do --}}
                <div class="rounded-3xl border border-white/10 bg-white/[0.03] p-7">

                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-slate-500">
                        What I Do
                    </p>

                    <div class="mt-6 space-y-4">

                        <div class="flex items-start gap-4">

                            <div class="mt-1 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-400">
                                &lt;/&gt;
                            </div>

                            <div>
                                <h3 class="font-semibold">
                                    Web Development
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Modern and responsive web applications.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-start gap-4">

                            <div class="mt-1 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-400">
                                DB
                            </div>

                            <div>
                                <h3 class="font-semibold">
                                    Database Systems
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Structured and reliable MySQL databases.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-start gap-4">

                            <div class="mt-1 flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-400">
                                API
                            </div>

                            <div>
                                <h3 class="font-semibold">
                                    API Development
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-slate-500">
                                    Backend APIs for web applications.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>


                {{-- Personal Approach --}}
                <div class="rounded-3xl border border-blue-500/20 bg-blue-500/5 p-7">

                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-blue-400">
                        My Approach
                    </p>

                    <p class="mt-4 text-sm leading-7 text-slate-400">
                        I believe good software should be simple to use,
                        reliable, maintainable, and built with purpose.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- Featured Projects --}}
<section id="projects" class="relative overflow-hidden border-t border-white/10 py-24 sm:py-32">

    {{-- Background Glow --}}
    <div class="pointer-events-none absolute right-0 top-1/4 -z-10 h-[500px] w-[500px] rounded-full bg-blue-600/10 blur-[140px]"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">

            <div class="max-w-2xl">

                <p class="text-sm font-semibold uppercase tracking-[0.35em] text-blue-400">
                    Portfolio
                </p>

                <h2 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">
                    Featured
                    <span class="text-blue-400">
                        Projects
                    </span>
                </h2>

                <p class="mt-5 text-lg leading-8 text-slate-400">
                    A selection of projects I've built using modern
                    web technologies and development tools.
                </p>

            </div>


            {{-- View All --}}
            <a
                href="{{ route('projects') }}"
                class="group inline-flex shrink-0 items-center gap-2 text-sm font-semibold text-blue-400 transition hover:text-blue-300"
            >
                View All Projects

                <span class="transition-transform group-hover:translate-x-1">
                    →
                </span>
            </a>

        </div>


        {{-- Projects --}}
        @php
            $featuredProjects = $projects
                ->where('is_featured', true)
                ->take(3);
        @endphp


        @if ($featuredProjects->count())

            <div class="mt-14 grid gap-7 lg:grid-cols-3">

                @foreach ($featuredProjects as $project)

                    <article
                        class="group overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03] transition duration-300 hover:-translate-y-1 hover:border-blue-500/30 hover:bg-white/[0.05] hover:shadow-2xl hover:shadow-blue-950/20"
                    >

                        {{-- Image --}}
                        <a
                            href="{{ route('projects.show', $project) }}"
                            class="relative block aspect-[16/10] overflow-hidden bg-slate-900"
                        >

                            @if ($project->image)

                                <img
                                    src="{{ asset('storage/' . $project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                >

                            @else

                                <div class="flex h-full items-center justify-center bg-slate-900">

                                    <span class="text-sm text-slate-500">
                                        No project image
                                    </span>

                                </div>

                            @endif


                            {{-- Image Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-70"></div>


                            {{-- Featured Badge --}}
                            <div class="absolute left-4 top-4">

                                <span class="rounded-full border border-white/10 bg-slate-950/70 px-3 py-1.5 text-xs font-semibold text-blue-300 backdrop-blur-md">
                                    ⭐ Featured
                                </span>

                            </div>


                            {{-- Open Button --}}
                            <div class="absolute bottom-4 right-4 flex h-10 w-10 translate-y-2 items-center justify-center rounded-full border border-white/10 bg-slate-950/70 text-white opacity-0 backdrop-blur-md transition duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                                ↗
                            </div>

                        </a>


                        {{-- Content --}}
                        <div class="p-6">

                            <div class="flex items-start justify-between gap-4">

                                <div>

                                    <h3 class="text-xl font-bold transition group-hover:text-blue-400">
                                        {{ $project->title }}
                                    </h3>

                                    @if ($project->short_description)

                                        <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-400">
                                            {{ $project->short_description }}
                                        </p>

                                    @elseif ($project->description)

                                        <p class="mt-2 line-clamp-2 text-sm leading-6 text-slate-400">
                                            {{ $project->description }}
                                        </p>

                                    @endif

                                </div>

                            </div>


                            {{-- Technologies --}}
                            @if ($project->technologies)

                                <div class="mt-5 flex flex-wrap gap-2">

                                    @foreach (explode(',', $project->technologies) as $technology)

                                        <span class="rounded-lg border border-white/10 bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-400">
                                            {{ trim($technology) }}
                                        </span>

                                    @endforeach

                                </div>

                            @endif


                            {{-- Footer --}}
                            <div class="mt-6 flex items-center justify-between border-t border-white/10 pt-5">

                                <a
                                    href="{{ route('projects.show', $project) }}"
                                    class="text-sm font-semibold text-slate-300 transition hover:text-white"
                                >
                                    View Details
                                </a>


                                @if ($project->url)

                                    <a
                                        href="{{ $project->url }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-1.5 text-sm font-semibold text-blue-400 transition hover:text-blue-300"
                                    >
                                        Live Project
                                        <span>↗</span>
                                    </a>

                                @endif

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            {{-- Empty State --}}
            <div class="mt-14 rounded-3xl border border-dashed border-white/10 bg-white/[0.02] px-6 py-16 text-center">

                <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-500/10 text-2xl">
                    🚀
                </div>

                <h3 class="mt-5 text-xl font-bold">
                    Projects coming soon
                </h3>

                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                    Featured projects will appear here once they are added
                    through the admin panel.
                </p>

            </div>

        @endif

    </div>

</section>


{{-- Skills --}}
<section id="skills" class="relative overflow-hidden border-t border-white/10 py-24 sm:py-32">

    {{-- Background Glow --}}
    <div class="pointer-events-none absolute -left-40 top-1/3 -z-10 h-[450px] w-[450px] rounded-full bg-cyan-600/10 blur-[130px]"></div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="max-w-2xl">

            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-blue-400">
                Skills & Technologies
            </p>

            <h2 class="mt-4 text-4xl font-black tracking-tight sm:text-5xl">
                Tools I use to
                <span class="text-blue-400">
                    build.
                </span>
            </h2>

            <p class="mt-5 text-lg leading-8 text-slate-400">
                Technologies and tools I work with when developing
                websites and web applications.
            </p>

        </div>


        {{-- Skills Grid --}}
        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">


            {{-- PHP --}}
            <div class="group rounded-3xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/30 hover:bg-white/[0.05]">

                <div class="flex items-start justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500/10 text-lg font-black text-indigo-400">
                        PHP
                    </div>

                    <span class="text-xs text-slate-600">
                        Backend
                    </span>

                </div>

                <h3 class="mt-6 text-xl font-bold">
                    PHP
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Server-side programming for dynamic web applications
                    and backend systems.
                </p>

            </div>


            {{-- Laravel --}}
            <div class="group rounded-3xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/30 hover:bg-white/[0.05]">

                <div class="flex items-start justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-500/10 text-lg font-black text-red-400">
                        L
                    </div>

                    <span class="text-xs text-slate-600">
                        Framework
                    </span>

                </div>

                <h3 class="mt-6 text-xl font-bold">
                    Laravel
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Building structured, secure, and maintainable
                    web applications.
                </p>

            </div>


            {{-- MySQL --}}
            <div class="group rounded-3xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/30 hover:bg-white/[0.05]">

                <div class="flex items-start justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-lg font-black text-blue-400">
                        SQL
                    </div>

                    <span class="text-xs text-slate-600">
                        Database
                    </span>

                </div>

                <h3 class="mt-6 text-xl font-bold">
                    MySQL
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Designing and managing relational databases
                    for web applications.
                </p>

            </div>


            {{-- JavaScript --}}
            <div class="group rounded-3xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/30 hover:bg-white/[0.05]">

                <div class="flex items-start justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-yellow-500/10 text-lg font-black text-yellow-400">
                        JS
                    </div>

                    <span class="text-xs text-slate-600">
                        Frontend
                    </span>

                </div>

                <h3 class="mt-6 text-xl font-bold">
                    JavaScript
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Creating interactive and dynamic user interfaces
                    for modern websites.
                </p>

            </div>


            {{-- HTML & CSS --}}
            <div class="group rounded-3xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/30 hover:bg-white/[0.05]">

                <div class="flex items-start justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-500/10 text-lg font-black text-orange-400">
                        HC
                    </div>

                    <span class="text-xs text-slate-600">
                        Frontend
                    </span>

                </div>

                <h3 class="mt-6 text-xl font-bold">
                    HTML & CSS
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Building responsive layouts and clean
                    user interfaces.
                </p>

            </div>


            {{-- Tailwind CSS --}}
            <div class="group rounded-3xl border border-white/10 bg-white/[0.03] p-6 transition duration-300 hover:-translate-y-1 hover:border-blue-500/30 hover:bg-white/[0.05]">

                <div class="flex items-start justify-between">

                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/10 text-lg font-black text-cyan-400">
                        TW
                    </div>

                    <span class="text-xs text-slate-600">
                        UI
                    </span>

                </div>

                <h3 class="mt-6 text-xl font-bold">
                    Tailwind CSS
                </h3>

                <p class="mt-2 text-sm leading-6 text-slate-500">
                    Creating modern responsive interfaces with
                    utility-first CSS.
                </p>

            </div>


        </div>


        {{-- Development Workflow --}}
        <div class="mt-10 rounded-3xl border border-white/10 bg-white/[0.03] p-7 sm:p-8">

            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">

                <div>

                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-slate-500">
                        Development Workflow
                    </p>

                    <h3 class="mt-2 text-xl font-bold">
                        From idea to working application.
                    </h3>

                </div>


                <div class="flex flex-wrap items-center gap-3">

                    <span class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-400">
                        Plan
                    </span>

                    <span class="text-slate-600">
                        →
                    </span>

                    <span class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-400">
                        Develop
                    </span>

                    <span class="text-slate-600">
                        →
                    </span>

                    <span class="rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-400">
                        Test
                    </span>

                    <span class="text-slate-600">
                        →
                    </span>

                    <span class="rounded-xl border border-blue-500/20 bg-blue-500/5 px-4 py-2 text-sm font-semibold text-blue-400">
                        Deploy
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
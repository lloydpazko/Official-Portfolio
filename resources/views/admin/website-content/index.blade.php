@extends('admin.layouts.app')

@section('title', 'Website Content')
@section('page_title', 'Website Content')

@section('content')

<div class="space-y-8">

    {{-- Header --}}
    <div>
        <p class="text-sm font-medium text-blue-400">
            Portfolio Management
        </p>

        <h1 class="mt-2 text-3xl font-black tracking-tight text-white">
            Website Content
        </h1>

        <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-400">
            Manage the content and appearance of your public portfolio
            from one place.
        </p>
    </div>


    {{-- Content Cards --}}
    <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">

        {{-- Home --}}
        <a
            href="#"
            class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:border-blue-500/30 hover:bg-white/[0.05]"
        >
            <div class="flex items-start justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-2xl">
                    🏠
                </div>

                <span class="text-slate-600 transition group-hover:text-blue-400">
                    →
                </span>

            </div>

            <h2 class="mt-5 text-lg font-bold text-white">
                Home Page
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Manage your hero section, introduction, profile information,
                and homepage content.
            </p>
        </a>


        {{-- About --}}
        <a
            href="#"
            class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:border-blue-500/30 hover:bg-white/[0.05]"
        >
            <div class="flex items-start justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/10 text-2xl">
                    👤
                </div>

                <span class="text-slate-600 transition group-hover:text-cyan-400">
                    →
                </span>

            </div>

            <h2 class="mt-5 text-lg font-bold text-white">
                About Me
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Update your biography, skills, education, work experience,
                and personal information.
            </p>
        </a>


        {{-- Contact --}}
        <a
            href="#"
            class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:border-blue-500/30 hover:bg-white/[0.05]"
        >
            <div class="flex items-start justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-500/10 text-2xl">
                    📞
                </div>

                <span class="text-slate-600 transition group-hover:text-emerald-400">
                    →
                </span>

            </div>

            <h2 class="mt-5 text-lg font-bold text-white">
                Contact Information
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Manage your email, phone number, location, and contact
                information displayed on the website.
            </p>
        </a>


        {{-- Social Media --}}
        <a
            href="#"
            class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:border-blue-500/30 hover:bg-white/[0.05]"
        >
            <div class="flex items-start justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-500/10 text-2xl">
                    🔗
                </div>

                <span class="text-slate-600 transition group-hover:text-purple-400">
                    →
                </span>

            </div>

            <h2 class="mt-5 text-lg font-bold text-white">
                Social Media
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Manage links to Facebook, GitHub, LinkedIn, YouTube,
                and other social platforms.
            </p>
        </a>


        {{-- Appearance --}}
        <a
            href="#"
            class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:border-blue-500/30 hover:bg-white/[0.05]"
        >
            <div class="flex items-start justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-pink-500/10 text-2xl">
                    🎨
                </div>

                <span class="text-slate-600 transition group-hover:text-pink-400">
                    →
                </span>

            </div>

            <h2 class="mt-5 text-lg font-bold text-white">
                Appearance
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Customize colors, visual style, backgrounds, and other
                appearance settings.
            </p>
        </a>


        {{-- Sections --}}
        <a
            href="#"
            class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:border-blue-500/30 hover:bg-white/[0.05]"
        >
            <div class="flex items-start justify-between">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-500/10 text-2xl">
                    🧩
                </div>

                <span class="text-slate-600 transition group-hover:text-amber-400">
                    →
                </span>

            </div>

            <h2 class="mt-5 text-lg font-bold text-white">
                Website Sections
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-500">
                Control which sections are visible on your public portfolio
                and arrange their content.
            </p>
        </a>

    </div>


    {{-- Information --}}
    <div class="rounded-2xl border border-blue-500/10 bg-blue-500/5 p-6">

        <div class="flex gap-4">

            <div class="text-2xl">
                💡
            </div>

            <div>
                <h3 class="font-bold text-white">
                    Content Management
                </h3>

                <p class="mt-1 text-sm leading-6 text-slate-400">
                    Changes made here will eventually be reflected directly
                    on your public portfolio. You won't need to edit the
                    website's Blade files every time you want to update
                    your content.
                </p>
            </div>

        </div>

    </div>

</div>

@endsection
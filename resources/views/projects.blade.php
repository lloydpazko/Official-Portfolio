<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Projects | Lloyd Paliuanan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-950 text-white">

    {{-- Navigation --}}
    <nav class="border-b border-white/10 bg-slate-900">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

            <a href="{{ route('home') }}" class="text-xl font-bold">
                Lloyd<span class="text-blue-500">.</span>
            </a>

            <div class="flex items-center gap-6 text-sm">

                <a
                    href="{{ route('home') }}"
                    class="text-slate-400 transition hover:text-white"
                >
                    Home
                </a>

                <a
                    href="{{ route('projects') }}"
                    class="text-white"
                >
                    Projects
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="text-slate-400 transition hover:text-white"
                >
                    Contact
                </a>

            </div>

        </div>
    </nav>


    {{-- Header --}}
    <main class="mx-auto max-w-7xl px-6 py-20 lg:px-8">

        <div class="max-w-3xl">

            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-500">
                My Work
            </p>

            <h1 class="mt-3 text-5xl font-bold tracking-tight sm:text-6xl">
                Projects
            </h1>

            <p class="mt-6 text-lg leading-8 text-slate-400">
                A collection of projects and applications I've built using
                modern web technologies.
            </p>

        </div>


        {{-- Projects --}}
        @if ($projects->count())

            <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($projects as $project)

                    <article
                        class="group overflow-hidden rounded-3xl border border-white/10 bg-white/5 transition duration-300 hover:-translate-y-1 hover:border-blue-500/30 hover:bg-white/[0.07]"
                    >

                        {{-- Image --}}
                        <div class="aspect-video overflow-hidden bg-slate-900">

                            @if ($project->image)

                                <img
                                    src="{{ asset('storage/' . $project->image) }}"
                                    alt="{{ $project->title }}"
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                >

                            @else

                                <div class="flex h-full items-center justify-center text-slate-600">
                                    <span class="text-sm">
                                        No Image
                                    </span>
                                </div>

                            @endif

                        </div>


                        {{-- Content --}}
                        <div class="p-6">

                            <div class="flex items-start justify-between gap-3">

                                <h2 class="text-xl font-bold">
                                    {{ $project->title }}
                                </h2>

                                @if ($project->is_featured)

                                    <span class="shrink-0 rounded-full bg-blue-500/10 px-3 py-1 text-xs font-semibold text-blue-400">
                                        Featured
                                    </span>

                                @endif

                            </div>


                            <p class="mt-4 line-clamp-3 text-sm leading-6 text-slate-400">
                                {{ $project->description }}
                            </p>


                            {{-- Technologies --}}
                            @if ($project->technologies)

                                <div class="mt-5 flex flex-wrap gap-2">

                                    @foreach (explode(',', $project->technologies) as $technology)

                                        <span class="rounded-lg bg-white/5 px-3 py-1.5 text-xs text-slate-300">
                                            {{ trim($technology) }}
                                        </span>

                                    @endforeach

                                </div>

                            @endif


                            {{-- Project Link --}}
                            @if ($project->url)

                            <div class="mt-6">

                                <a
                                    href="{{ route('projects.show', $project->slug) }}"
                                    class="inline-flex items-center font-semibold text-blue-400 transition hover:text-blue-300"
                                >
                                    View Project
                                    <span class="ml-2 transition group-hover:translate-x-1">
                                        →
                                    </span>
                                </a>

                            </div>

                        @endif

                        </div>

                    </article>

                @endforeach

            </div>

        @else

            <div class="mt-16 rounded-3xl border border-white/10 bg-white/5 p-12 text-center">

                <h2 class="text-2xl font-bold">
                    No Projects Yet
                </h2>

                <p class="mt-3 text-slate-400">
                    Projects will appear here soon.
                </p>

            </div>

        @endif

    </main>


    {{-- Footer --}}
    <footer class="border-t border-white/10 py-8">

        <div class="mx-auto max-w-7xl px-6 text-center text-sm text-slate-500 lg:px-8">

            © {{ date('Y') }} Lloyd Paliuanan. All rights reserved.

        </div>

    </footer>

</body>
</html>
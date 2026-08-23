<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $project->title }} | Lloyd Paliuanan</title>

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


    <main class="mx-auto max-w-5xl px-6 py-16 lg:px-8">

        {{-- Back --}}
        <a
            href="{{ route('projects') }}"
            class="inline-flex items-center text-sm text-slate-400 transition hover:text-white"
        >
            ← Back to Projects
        </a>


        {{-- Project Header --}}
        <div class="mt-10">

            <div class="flex flex-wrap items-center gap-3">

                @if ($project->is_featured)

                    <span class="rounded-full bg-blue-500/10 px-3 py-1 text-xs font-semibold text-blue-400">
                        Featured Project
                    </span>

                @endif

            </div>

            <h1 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl">
                {{ $project->title }}
            </h1>

        </div>


        {{-- Image --}}
        @if ($project->image)

            <div class="mt-10 overflow-hidden rounded-3xl border border-white/10 bg-slate-900">

                <img
                    src="{{ asset('storage/' . $project->image) }}"
                    alt="{{ $project->title }}"
                    class="max-h-[600px] w-full object-cover"
                >

            </div>

        @endif


        {{-- Content --}}
        <div class="mt-12 grid gap-12 lg:grid-cols-[1fr_280px]">

            {{-- Description --}}
            <div>

                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-500">
                    About This Project
                </p>

                <div class="mt-5 text-lg leading-8 text-slate-400">

                    {!! nl2br(e($project->description)) !!}

                </div>

            </div>


            {{-- Project Information --}}
            <aside class="h-fit rounded-2xl border border-white/10 bg-white/5 p-6">

                <h2 class="font-semibold">
                    Project Information
                </h2>


                @if ($project->technologies)

                    <div class="mt-6">

                        <p class="text-xs uppercase tracking-wider text-slate-500">
                            Technologies
                        </p>

                        <div class="mt-3 flex flex-wrap gap-2">

                            @foreach (explode(',', $project->technologies) as $technology)

                                <span class="rounded-lg bg-white/5 px-3 py-1.5 text-xs text-slate-300">
                                    {{ trim($technology) }}
                                </span>

                            @endforeach

                        </div>

                    </div>

                @endif


                @if ($project->url)

                    <div class="mt-8">

                        <a
                            href="{{ $project->url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="block rounded-xl bg-blue-600 px-5 py-3 text-center text-sm font-semibold transition hover:bg-blue-500"
                        >
                            Visit Live Project →
                        </a>

                    </div>

                @endif

            </aside>

        </div>

    </main>


    <footer class="border-t border-white/10 py-8">

        <div class="mx-auto max-w-7xl px-6 text-center text-sm text-slate-500 lg:px-8">

            © {{ date('Y') }} Lloyd Paliuanan. All rights reserved.

        </div>

    </footer>

</body>
</html>
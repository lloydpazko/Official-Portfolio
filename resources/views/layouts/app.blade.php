<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Lloyd Paliuanan | Web Developer')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-white antialiased">

    {{-- NAVIGATION --}}
    <header class="fixed inset-x-0 top-0 z-50">
        <nav class="mx-auto mt-4 max-w-6xl px-4">

            <div class="flex items-center justify-between rounded-2xl border border-white/10 bg-slate-900/80 px-5 py-4 shadow-xl backdrop-blur-xl">

                {{-- Logo --}}
                <a href="{{ route('home') }}"
                   class="text-xl font-bold tracking-tight">
                    Lloyd<span class="text-blue-500">.</span>
                </a>

                {{-- Desktop Navigation --}}
                <div class="hidden items-center gap-8 md:flex">

                    <a href="{{ route('home') }}"
                       class="text-sm text-slate-300 transition hover:text-white">
                        Home
                    </a>

                    <a href="{{ route('projects') }}"
                       class="text-sm text-slate-300 transition hover:text-white">
                        Projects
                    </a>

                    <a href="{{ route('contact') }}"
                       class="rounded-full bg-blue-600 px-5 py-2.5 text-sm font-semibold transition hover:bg-blue-500">
                        Contact
                    </a>

                </div>

                {{-- Mobile menu button --}}
                <button
                    type="button"
                    class="rounded-lg border border-white/10 p-2 text-slate-300 md:hidden"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">

                    ☰

                </button>

            </div>

            {{-- Mobile Navigation --}}
            <div id="mobile-menu"
                 class="mt-2 hidden rounded-2xl border border-white/10 bg-slate-900/95 p-4 backdrop-blur-xl md:hidden">

                <div class="flex flex-col gap-2">

                    <a href="{{ route('home') }}"
                       class="rounded-lg px-4 py-3 text-slate-300 hover:bg-white/5 hover:text-white">
                        Home
                    </a>

                    <a href="{{ route('projects') }}"
                       class="rounded-lg px-4 py-3 text-slate-300 hover:bg-white/5 hover:text-white">
                        Projects
                    </a>

                    <a href="{{ route('contact') }}"
                       class="rounded-lg bg-blue-600 px-4 py-3 text-center font-semibold hover:bg-blue-500">
                        Contact Me
                    </a>

                </div>

            </div>

        </nav>
    </header>


    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>


    {{-- FOOTER --}}
    <footer class="border-t border-white/10 bg-slate-950">

        <div class="mx-auto flex max-w-6xl flex-col gap-4 px-6 py-8 text-center sm:flex-row sm:items-center sm:justify-between sm:text-left">

            <p class="text-sm text-slate-500">
                © {{ date('Y') }} Lloyd Paliuanan
            </p>

            <p class="text-sm text-slate-500">
                Web Developer
            </p>

        </div>

    </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Admin Panel') | Lloyd Paliuanan
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="min-h-screen bg-slate-950 text-white">


    {{-- Mobile Overlay --}}
    <div
        id="admin-overlay"
        class="fixed inset-0 z-40 hidden bg-black/60 backdrop-blur-sm lg:hidden"
        onclick="closeAdminSidebar()"
    ></div>


    {{-- Sidebar --}}
    <aside
        id="admin-sidebar"
        class="fixed inset-y-0 left-0 z-50 flex w-72 -translate-x-full flex-col border-r border-white/10 bg-slate-900/95 backdrop-blur-xl transition-transform duration-300 lg:translate-x-0"
    >

        {{-- Logo --}}
        <div class="flex h-20 items-center border-b border-white/10 px-6">

            <a
                href="{{ route('admin.dashboard') }}"
                class="group"
            >

                <div class="text-xl font-black tracking-tight">
                    Lloyd<span class="text-blue-500 transition group-hover:text-cyan-400">.</span>
                    <span class="text-slate-400">Admin</span>
                </div>

                <p class="mt-1 text-xs text-slate-500">
                    Portfolio Management
                </p>

            </a>

        </div>


        {{-- Navigation --}}
        <nav class="flex-1 overflow-y-auto px-4 py-6">

            {{-- Main Menu --}}
            <p class="mb-3 px-3 text-[11px] font-semibold uppercase tracking-[0.25em] text-slate-600">
                Main Menu
            </p>

            {{-- Dashboard --}}
            <a
                href="{{ route('admin.dashboard') }}"
                class="mb-1 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition
                {{ request()->routeIs('admin.dashboard')
                    ? 'bg-blue-500/10 text-blue-400'
                    : 'text-slate-400 hover:bg-white/5 hover:text-white' }}"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m2.25 12 8.954-8.954a1.125 1.125 0 0 1 1.592 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-6.75h4.5V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h7.5"
                    />
                </svg>

                <span>Dashboard</span>
            </a>


            {{-- Website Content --}}
            <a
                href="{{ route('admin.website-content') }}"
                class="mb-1 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition
                {{ request()->routeIs('admin.website-content*')
                    ? 'bg-blue-500/10 text-blue-400'
                    : 'text-slate-400 hover:bg-white/5 hover:text-white' }}"
            >
                <span class="text-lg">🌐</span>

                <span>Website Content</span>
            </a>


            {{-- Projects --}}
            <a
                href="{{ route('admin.projects') }}"
                class="mb-1 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition
                {{ request()->routeIs('admin.projects*')
                    ? 'bg-blue-500/10 text-blue-400'
                    : 'text-slate-400 hover:bg-white/5 hover:text-white' }}"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m2.25 15.75 3.75-3.75 3 3 4.5-4.5 5.25 5.25"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 19.5h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Z"
                    />
                </svg>

                <span>Projects</span>
            </a>


            {{-- Messages --}}
            <a
                href="{{ route('admin.messages') }}"
                class="mb-1 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition
                {{ request()->routeIs('admin.messages*')
                    ? 'bg-blue-500/10 text-blue-400'
                    : 'text-slate-400 hover:bg-white/5 hover:text-white' }}"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H6.75L2.25 23.25V6.75A2.25 2.25 0 0 1 4.5 4.5h15a2.25 2.25 0 0 1 2.25 2.25Z"
                    />
                </svg>

                <span>Messages</span>
            </a>


            {{-- Divider --}}
            <div class="my-6 border-t border-white/10"></div>


            {{-- Portfolio --}}
            <p class="mb-3 px-3 text-[11px] font-semibold uppercase tracking-[0.25em] text-slate-600">
                Portfolio
            </p>


            {{-- Documents --}}
            <div
                class="mb-1 flex cursor-not-allowed items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600"
                title="Coming soon"
            >
                <span class="text-lg">📄</span>

                <span>Documents</span>

                <span class="ml-auto rounded-md bg-white/5 px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wider text-slate-600">
                    Soon
                </span>
            </div>


            {{-- Backups --}}
            <div
                class="mb-1 flex cursor-not-allowed items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600"
                title="Coming soon"
            >
                <span class="text-lg">💾</span>

                <span>Backups</span>

                <span class="ml-auto rounded-md bg-white/5 px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wider text-slate-600">
                    Soon
                </span>
            </div>


            {{-- Divider --}}
            <div class="my-6 border-t border-white/10"></div>


            {{-- System --}}
            <p class="mb-3 px-3 text-[11px] font-semibold uppercase tracking-[0.25em] text-slate-600">
                System
            </p>


            {{-- Account --}}
            <a
                href="{{ route('admin.account') }}"
                class="mb-1 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium transition
                {{ request()->routeIs('admin.account*')
                    ? 'bg-blue-500/10 text-blue-400'
                    : 'text-slate-400 hover:bg-white/5 hover:text-white' }}"
            >
                <span class="text-lg">👤</span>

                <span>Account</span>
            </a>


            {{-- Security --}}
            <div
                class="mb-1 flex cursor-not-allowed items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-600"
                title="Coming soon"
            >
                <span class="text-lg">🔐</span>

                <span>Security</span>

                <span class="ml-auto rounded-md bg-white/5 px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wider text-slate-600">
                    Soon
                </span>
            </div>


            {{-- View Website --}}
            <div class="my-6 border-t border-white/10"></div>

            <a
                href="{{ route('home') }}"
                target="_blank"
                class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-400 transition hover:bg-white/5 hover:text-white"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-5 w-5"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.6 9h16.8M3.6 15h16.8M12 3c2.25 2.5 3.5 5.5 3.5 9s-1.25 6.5-3.5 9c-2.25-2.5-3.5-5.5-3.5-9S9.75 5.5 12 3Z"
                    />
                </svg>

                <span>View Website</span>

                <span class="ml-auto text-xs text-slate-600">
                    ↗
                </span>
            </a>

        </nav>


        {{-- User / Logout --}}
        <div class="border-t border-white/10 p-4">

            <div class="mb-3 flex items-center gap-3 rounded-xl bg-white/5 p-3">

                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 text-sm font-bold">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>

                <div class="min-w-0">

                    <p class="truncate text-sm font-semibold">
                        {{ auth()->user()->name ?? 'Administrator' }}
                    </p>

                    <p class="truncate text-xs text-slate-500">
                        {{ auth()->user()->email ?? '' }}
                    </p>

                </div>

            </div>


            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="flex w-full items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-400 transition hover:bg-red-500/10 hover:text-red-400"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-5 w-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v15A2.25 2.25 0 0 0 7.5 22.5h6a2.25 2.25 0 0 0 2.25-2.25V16.5M12 15l3-3m0 0-3-3m3 3H2.25"
                        />
                    </svg>

                    <span>
                        Logout
                    </span>

                </button>

            </form>

        </div>

    </aside>


    {{-- Main Area --}}
    <div class="min-h-screen lg:pl-72">


        {{-- Top Bar --}}
        <header class="sticky top-0 z-30 border-b border-white/10 bg-slate-950/80 backdrop-blur-xl">

            <div class="flex h-20 items-center justify-between px-6 lg:px-8">

                {{-- Mobile Menu --}}
                <button
                    type="button"
                    onclick="openAdminSidebar()"
                    class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-slate-300 transition hover:bg-white/10 lg:hidden"
                    aria-label="Open admin menu"
                >

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-5 w-5"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>

                </button>


                {{-- Page Title --}}
                <div class="hidden md:block">

                    <p class="text-sm font-semibold text-slate-300">
                        @yield('page_title', 'Admin Panel')
                    </p>

                </div>


                {{-- Right --}}
                <div class="ml-auto flex items-center gap-3">

                    <a
                        href="{{ route('home') }}"
                        target="_blank"
                        class="hidden rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-slate-400 transition hover:bg-white/10 hover:text-white sm:inline-flex"
                    >
                        View Website ↗
                    </a>

                </div>

            </div>

        </header>


        {{-- Page Content --}}
        <main class="px-6 py-8 lg:px-8 lg:py-10">

            <div class="mx-auto max-w-7xl">

                @yield('content')

            </div>

        </main>


    </div>


    {{-- Sidebar Script --}}
    <script>

        function openAdminSidebar() {

            document
                .getElementById('admin-sidebar')
                .classList.remove('-translate-x-full');

            document
                .getElementById('admin-overlay')
                .classList.remove('hidden');

        }


        function closeAdminSidebar() {

            document
                .getElementById('admin-sidebar')
                .classList.add('-translate-x-full');

            document
                .getElementById('admin-overlay')
                .classList.add('hidden');

        }

    </script>

</body>

</html>
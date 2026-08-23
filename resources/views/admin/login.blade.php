<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Lloyd Paliuanan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-950 text-white">

    <div class="flex min-h-screen items-center justify-center px-6">

        <div class="w-full max-w-md">

            <div class="mb-8 text-center">
                <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-600 text-xl font-bold">
                    LP
                </div>

                <h1 class="text-3xl font-bold">
                    Admin Login
                </h1>

                <p class="mt-2 text-sm text-slate-400">
                    Sign in to manage your portfolio
                </p>
            </div>

            <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl">

                @if ($errors->any())
                    <div class="mb-6 rounded-xl border border-red-500/20 bg-red-500/10 p-4 text-sm text-red-400">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('admin.login.submit') }}" method="POST">
                    @csrf

                    <div class="mb-5">
                        <label class="mb-2 block text-sm font-medium text-slate-300">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="w-full rounded-xl border border-white/10 bg-slate-900 px-4 py-3 text-white outline-none transition focus:border-blue-500"
                            placeholder="admin@example.com"
                        >
                    </div>

                    <div class="mb-5">
                        <label class="mb-2 block text-sm font-medium text-slate-300">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            required
                            class="w-full rounded-xl border border-white/10 bg-slate-900 px-4 py-3 text-white outline-none transition focus:border-blue-500"
                            placeholder="••••••••"
                        >
                    </div>
                    <a href="{{ route('admin.password.email') }}"
                            class="rounded border-white/20 bg-slate-900 mb-6 flex items-center gap-2 text-sm text-slate-400"
                        >

                        Forgot Password
                        </a>

                    <label class="mb-6 flex items-center gap-2 text-sm text-slate-400">
                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-white/20 bg-slate-900"
                        >

                        Remember me
                    </label>

                    <button
                        type="submit"
                        class="w-full rounded-xl bg-blue-600 px-5 py-3 font-semibold transition hover:bg-blue-500"
                    >
                        Sign In
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <a
                        href="{{ route('home') }}"
                        class="text-sm text-slate-400 transition hover:text-white"
                    >
                        ← Back to Portfolio
                    </a>
                </div>

            </div>

        </div>

    </div>

</body>
</html>
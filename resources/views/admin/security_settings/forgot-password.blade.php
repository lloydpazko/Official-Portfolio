<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Forgot Password | Lloyd Paliuanan</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-slate-950 text-white">

<main class="flex min-h-screen items-center justify-center px-6 py-12">


    <div class="w-full max-w-md">


        {{-- Logo --}}
        <div class="mb-10 text-center">

            <a
                href="{{ route('admin.login') }}"
                class="inline-block"
            >

                <h1 class="text-3xl font-black tracking-tight">
                    Lloyd<span class="text-blue-500">.</span>
                    <span class="text-slate-400">Admin</span>
                </h1>

            </a>

            <p class="mt-2 text-sm text-slate-500">
                Portfolio Management
            </p>

        </div>


        {{-- Card --}}
        <div class="rounded-2xl border border-white/10 bg-slate-900/60 p-6 shadow-2xl shadow-black/30 backdrop-blur-xl sm:p-8">


            {{-- Icon --}}
            <div class="mb-6 flex justify-center">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl border border-blue-500/20 bg-blue-500/10 text-2xl">
                    🔐
                </div>

            </div>


            {{-- Heading --}}
            <div class="mb-8 text-center">

                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-blue-400">
                    Account Recovery
                </p>

                <h2 class="mt-3 text-3xl font-black tracking-tight">
                    Forgot Password?
                </h2>

                <p class="mt-3 text-sm leading-6 text-slate-400">
                    Enter the email address associated with your admin account
                    and we'll send you a password reset link.
                </p>

            </div>


            {{-- Success --}}
            @if (session('status'))

                <div class="mb-6 rounded-xl border border-emerald-500/20 bg-emerald-500/10 p-4">

                    <p class="text-sm leading-6 text-emerald-400">
                        {{ session('status') }}
                    </p>

                </div>

            @endif


            {{-- Errors --}}
            @if ($errors->any())

                <div class="mb-6 rounded-xl border border-red-500/20 bg-red-500/10 p-4">

                    @foreach ($errors->all() as $error)

                        <p class="text-sm leading-6 text-red-400">
                            {{ $error }}
                        </p>

                    @endforeach

                </div>

            @endif


            {{-- Form --}}
            <form
                action="{{ route('admin.password.email') }}"
                method="POST"
                class="space-y-6"
            >

                @csrf


                {{-- Email --}}
                <div>

                    <label
                        for="email"
                        class="mb-2 block text-sm font-semibold text-slate-300"
                    >
                        Admin Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="admin@example.com"
                        class="w-full rounded-xl border border-white/10 bg-slate-950 px-4 py-3.5 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                    >

                </div>


                {{-- Button --}}
                <button
                    type="submit"
                    class="flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-950/30 transition hover:bg-blue-500"
                >

                    <span>
                        Send Reset Link
                    </span>

                    <span>
                        →
                    </span>

                </button>

            </form>


            {{-- Back --}}
            <div class="mt-6 border-t border-white/10 pt-6 text-center">

                <a
                    href="{{ route('admin.login') }}"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-slate-400 transition hover:text-white"
                >

                    <span>←</span>

                    Back to Admin Login

                </a>

            </div>


        </div>


        {{-- Footer --}}
        <p class="mt-6 text-center text-xs text-slate-600">
            Lloyd Paliuanan · Portfolio Management
        </p>


    </div>


</main>

</body>

</html>

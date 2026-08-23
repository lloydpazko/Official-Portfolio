@extends('admin.layouts.app')

@section('title', 'Account Management')
@section('page_title', 'Account Management')

@section('content')

{{-- Header --}}
<div class="mb-8">
    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
        Settings
    </p>

    <h1 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
        Account Management
    </h1>

    <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-400">
        Manage your administrator profile and account security.
    </p>
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


{{-- Validation Errors --}}
@if ($errors->any())
    <div class="mb-6 rounded-2xl border border-red-500/20 bg-red-500/10 px-5 py-4">
        <p class="text-sm font-semibold text-red-400">
            Please fix the following errors:
        </p>

        <ul class="mt-2 list-inside list-disc space-y-1 text-sm text-red-300">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


{{-- Account Grid --}}
<div class="grid gap-6 xl:grid-cols-2">


    {{-- Profile --}}
    <section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

        <div class="border-b border-white/10 px-6 py-5">
            <div class="flex items-center gap-4">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-500/10 text-xl">
                    👤
                </div>

                <div>
                    <h2 class="text-lg font-bold text-white">
                        Profile Information
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Update your administrator information.
                    </p>
                </div>

            </div>
        </div>


        <form
            action="{{ route('admin.account.profile') }}"
            method="POST"
            class="space-y-5 p-6"
        >
            @csrf
            @method('PUT')


            {{-- Name --}}
            <div>
                <label
                    for="name"
                    class="mb-2 block text-sm font-semibold text-slate-300"
                >
                    Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', auth()->user()->name) }}"
                    required
                    class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                >
            </div>


            {{-- Email --}}
            <div>
                <label
                    for="email"
                    class="mb-2 block text-sm font-semibold text-slate-300"
                >
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email', auth()->user()->email) }}"
                    required
                    class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10"
                >
            </div>


            {{-- Button --}}
            <div class="pt-2">
                <button
                    type="submit"
                    class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/30"
                >
                    Save Profile
                    <span>→</span>
                </button>
            </div>

        </form>

    </section>



    {{-- Security --}}
    <section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

        <div class="border-b border-white/10 px-6 py-5">
            <div class="flex items-center gap-4">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-500/10 text-xl">
                    🔐
                </div>

                <div>
                    <h2 class="text-lg font-bold text-white">
                        Account Security
                    </h2>

                    <p class="mt-1 text-xs text-slate-500">
                        Change your administrator password.
                    </p>
                </div>

            </div>
        </div>


        <form
            action="{{ route('admin.account.password') }}"
            method="POST"
            class="space-y-5 p-6"
        >
            @csrf
            @method('PUT')


            {{-- Current Password --}}
            <div>
                <label
                    for="current_password"
                    class="mb-2 block text-sm font-semibold text-slate-300"
                >
                    Current Password
                </label>

                <input
                    type="password"
                    id="current_password"
                    name="current_password"
                    required
                    autocomplete="current-password"
                    class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition focus:border-purple-500 focus:ring-2 focus:ring-purple-500/10"
                >
            </div>


            {{-- New Password --}}
            <div>
                <label
                    for="password"
                    class="mb-2 block text-sm font-semibold text-slate-300"
                >
                    New Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition focus:border-purple-500 focus:ring-2 focus:ring-purple-500/10"
                >
            </div>


            {{-- Confirm Password --}}
            <div>
                <label
                    for="password_confirmation"
                    class="mb-2 block text-sm font-semibold text-slate-300"
                >
                    Confirm New Password
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    class="w-full rounded-xl border border-white/10 bg-slate-950/60 px-4 py-3 text-sm text-white outline-none transition focus:border-purple-500 focus:ring-2 focus:ring-purple-500/10"
                >
            </div>


            {{-- Button --}}
            <div class="pt-2">
                <button
                    type="submit"
                    class="inline-flex items-center gap-2 rounded-xl border border-purple-500/30 bg-purple-500/10 px-5 py-3 text-sm font-semibold text-purple-300 transition hover:bg-purple-500/20 focus:outline-none focus:ring-2 focus:ring-purple-500/20"
                >
                    Change Password
                    <span>→</span>
                </button>
            </div>

        </form>

    </section>

</div>


{{-- Account Status --}}
<section class="mt-6 rounded-2xl border border-white/10 bg-white/[0.03] p-6">

    <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

        <div class="flex items-center gap-4">

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400">
                ✓
            </div>

            <div>
                <h3 class="font-semibold text-white">
                    Administrator Account
                </h3>

                <p class="mt-1 text-xs text-slate-500">
                    You are currently logged in as {{ auth()->user()->email }}.
                </p>
            </div>

        </div>

        <span class="inline-flex w-fit items-center rounded-full border border-emerald-500/20 bg-emerald-500/10 px-3 py-1.5 text-xs font-semibold text-emerald-400">
            Active
        </span>

    </div>

</section>

@endsection
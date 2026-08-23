@extends('admin.layouts.App')

@section('title', 'Messages')
@section('page_title', 'Messages')

@section('content')

```
{{-- Header --}}
<div class="mb-8 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

    <div>

        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
            Communication
        </p>

        <h1 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
            Messages
        </h1>

        <p class="mt-3 text-sm leading-6 text-slate-400">
            Manage messages submitted through your portfolio contact form.
        </p>

    </div>

    <a
        href="{{ route('admin.dashboard') }}"
        class="inline-flex w-fit items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white"
    >
        ← Dashboard
    </a>

</div>


{{-- Success Message --}}
@if (session('success'))

    <div class="mb-6 flex items-center gap-3 rounded-2xl border border-emerald-500/20 bg-emerald-500/10 px-5 py-4">

        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400">
            ✓
        </div>

        <p class="text-sm font-medium text-emerald-400">
            {{ session('success') }}
        </p>

    </div>

@endif


{{-- Statistics --}}
@php
    $totalMessages = $messages->count();
    $unreadMessages = $messages->where('is_read', false)->count();
    $readMessages = $messages->where('is_read', true)->count();
@endphp


<div class="mb-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">


    {{-- Total --}}
    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">

        <div class="flex items-center justify-between">

            <div>

                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Total Messages
                </p>

                <p class="mt-2 text-3xl font-black text-white">
                    {{ $totalMessages }}
                </p>

            </div>

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-500/10 text-xl">
                ✉️
            </div>

        </div>

    </div>


    {{-- Unread --}}
    <div class="rounded-2xl border border-blue-500/20 bg-blue-500/[0.05] p-5">

        <div class="flex items-center justify-between">

            <div>

                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Unread
                </p>

                <p class="mt-2 text-3xl font-black text-blue-400">
                    {{ $unreadMessages }}
                </p>

            </div>

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-500/10 text-xl">
                🔵
            </div>

        </div>

    </div>


    {{-- Read --}}
    <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5">

        <div class="flex items-center justify-between">

            <div>

                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                    Read
                </p>

                <p class="mt-2 text-3xl font-black text-slate-300">
                    {{ $readMessages }}
                </p>

            </div>

            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-white/5 text-xl">
                ✓
            </div>

        </div>

    </div>

</div>


{{-- Inbox --}}
<section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

    {{-- Inbox Header --}}
    <div class="flex flex-col gap-4 border-b border-white/10 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">

        <div>

            <div class="flex items-center gap-3">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/10">
                    📥
                </div>

                <div>

                    <h2 class="font-bold text-white">
                        Inbox
                    </h2>

                    <p class="text-xs text-slate-500">
                        Latest messages first
                    </p>

                </div>

            </div>

        </div>

        <span class="w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-semibold text-slate-400">
            {{ $totalMessages }} {{ $totalMessages === 1 ? 'message' : 'messages' }}
        </span>

    </div>


    {{-- Messages --}}
    @if ($messages->count())

        <div class="divide-y divide-white/10">

            @foreach ($messages as $message)

                <div
                    class="group relative transition hover:bg-white/[0.03]"
                >

                    <a
                        href="{{ route('admin.messages.show', $message) }}"
                        class="block px-6 py-5 pr-20"
                    >

                        <div class="flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">


                            {{-- Sender --}}
                            <div class="min-w-0">

                                <div class="flex flex-wrap items-center gap-3">

                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500/20 to-cyan-500/10 text-sm font-bold text-blue-300">
                                        {{ strtoupper(substr($message->name, 0, 1)) }}
                                    </div>


                                    <div class="min-w-0">

                                        <div class="flex flex-wrap items-center gap-2">

                                            <p class="truncate text-sm font-bold text-white">
                                                {{ $message->name }}
                                            </p>


                                            @if (!$message->is_read)

                                                <span class="rounded-full bg-blue-500/10 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-blue-400">
                                                    Unread
                                                </span>

                                            @else

                                                <span class="rounded-full bg-white/5 px-2.5 py-1 text-[10px] font-semibold uppercase tracking-wider text-slate-600">
                                                    Read
                                                </span>

                                            @endif

                                        </div>


                                        <p class="mt-0.5 truncate text-xs text-slate-500">
                                            {{ $message->email }}
                                        </p>

                                    </div>

                                </div>


                                {{-- Subject --}}
                                <div class="mt-4 ml-0 sm:ml-[52px]">

                                    <p class="truncate text-sm font-semibold text-slate-300 transition group-hover:text-blue-400">
                                        {{ $message->subject }}
                                    </p>

                                    @if (!empty($message->message))

                                        <p class="mt-1 line-clamp-1 text-xs text-slate-600">
                                            {{ $message->message }}
                                        </p>

                                    @endif

                                </div>

                            </div>


                            {{-- Date --}}
                            <div class="shrink-0 lg:text-right">

                                <p class="text-xs text-slate-600">
                                    {{ $message->created_at->format('M d, Y') }}
                                </p>

                                <p class="mt-1 text-[11px] text-slate-700">
                                    {{ $message->created_at->format('h:i A') }}
                                </p>

                            </div>

                        </div>

                    </a>


                    {{-- Delete --}}
                    <form
                        action="{{ route('admin.messages.destroy', $message) }}"
                        method="POST"
                        class="absolute right-5 top-1/2 -translate-y-1/2"
                        onsubmit="return confirm('Are you sure you want to delete this message?');"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="flex h-9 w-9 items-center justify-center rounded-xl border border-transparent text-slate-600 opacity-0 transition hover:border-red-500/20 hover:bg-red-500/10 hover:text-red-400 group-hover:opacity-100"
                            title="Delete message"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-4 w-4"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12.564 0c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0C8.91 2.155 8 3.14 8 4.32v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"
                                />

                            </svg>

                        </button>

                    </form>

                </div>

            @endforeach

        </div>

    @else

        {{-- Empty --}}
        <div class="px-6 py-20 text-center">

            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-500/10 text-3xl">
                📭
            </div>

            <h3 class="mt-5 text-lg font-bold text-white">
                No messages yet
            </h3>

            <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                Messages submitted through your portfolio contact form will appear here.
            </p>

        </div>

    @endif

</section>
```

@endsection

@extends('admin.layouts.App')

@section('title', 'Message Details')
@section('page_title', 'Message Details')

@section('content')

```
{{-- Header --}}
<div class="mb-8 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

    <div>

        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
            Communication
        </p>

        <h1 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
            Message Details
        </h1>

        <p class="mt-3 text-sm leading-6 text-slate-400">
            Read and manage the message sent through your portfolio.
        </p>

    </div>


    <a
        href="{{ route('admin.messages') }}"
        class="inline-flex w-fit items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-300 transition hover:bg-white/10 hover:text-white"
    >
        ← Back to Inbox
    </a>

</div>


<div class="grid gap-6 xl:grid-cols-3">


    {{-- Main Message --}}
    <div class="xl:col-span-2">

        <section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">


            {{-- Message Header --}}
            <div class="border-b border-white/10 px-6 py-6 sm:px-8">

                <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">

                    <div class="min-w-0">

                        <div class="flex flex-wrap items-center gap-3">

                            @if ($message->is_read)

                                <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-[10px] font-bold uppercase tracking-wider text-slate-500">
                                    Read
                                </span>

                            @else

                                <span class="rounded-full border border-blue-500/20 bg-blue-500/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-wider text-blue-400">
                                    Unread
                                </span>

                            @endif

                        </div>


                        <h2 class="mt-4 break-words text-2xl font-black text-white sm:text-3xl">
                            {{ $message->subject }}
                        </h2>

                    </div>


                    {{-- Date --}}
                    <div class="shrink-0 sm:text-right">

                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-600">
                            Received
                        </p>

                        <p class="mt-1 text-sm font-medium text-slate-400">
                            {{ $message->created_at->format('M d, Y') }}
                        </p>

                        <p class="mt-1 text-xs text-slate-600">
                            {{ $message->created_at->format('h:i A') }}
                        </p>

                    </div>

                </div>

            </div>


            {{-- Sender --}}
            <div class="border-b border-white/10 px-6 py-6 sm:px-8">

                <div class="flex items-center gap-4">

                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 text-base font-black text-white shadow-lg shadow-blue-950/30">
                        {{ strtoupper(substr($message->name, 0, 1)) }}
                    </div>


                    <div class="min-w-0">

                        <p class="truncate text-sm font-bold text-white">
                            {{ $message->name }}
                        </p>

                        <a
                            href="mailto:{{ $message->email }}"
                            class="mt-1 block truncate text-sm text-blue-400 transition hover:text-blue-300"
                        >
                            {{ $message->email }}
                        </a>

                    </div>

                </div>

            </div>


            {{-- Message Body --}}
            <div class="px-6 py-8 sm:px-8">

                <p class="mb-4 text-xs font-semibold uppercase tracking-[0.2em] text-slate-600">
                    Message
                </p>

                <div class="rounded-2xl border border-white/10 bg-slate-950/40 p-6 sm:p-8">

                    <p class="whitespace-pre-line break-words text-sm leading-7 text-slate-300 sm:text-base">
                        {{ $message->message }}
                    </p>

                </div>

            </div>


            {{-- Footer Actions --}}
            <div class="flex flex-col gap-3 border-t border-white/10 bg-white/[0.02] px-6 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-8">

                <a
                    href="{{ route('admin.messages') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-400 transition hover:bg-white/10 hover:text-white"
                >
                    ← Back to Inbox
                </a>


                <div class="flex flex-col gap-3 sm:flex-row">


                    <a
                        href="mailto:{{ $message->email }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-500"
                    >
                        Reply via Email
                        <span>↗</span>
                    </a>


                    <form
                        action="{{ route('admin.messages.destroy', $message) }}"
                        method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this message?');"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-red-500/20 bg-red-500/5 px-5 py-3 text-sm font-semibold text-red-400 transition hover:bg-red-500/10"
                        >
                            Delete
                        </button>

                    </form>

                </div>

            </div>

        </section>

    </div>


    {{-- Sidebar --}}
    <div class="space-y-6">


        {{-- Sender Information --}}
        <section class="overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

            <div class="border-b border-white/10 px-6 py-5">

                <h2 class="font-bold text-white">
                    Sender Information
                </h2>

                <p class="mt-1 text-xs text-slate-500">
                    Contact details
                </p>

            </div>


            <div class="space-y-5 p-6">


                {{-- Name --}}
                <div>

                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-600">
                        Name
                    </p>

                    <p class="mt-2 break-words text-sm font-semibold text-slate-300">
                        {{ $message->name }}
                    </p>

                </div>


                {{-- Email --}}
                <div>

                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-600">
                        Email
                    </p>

                    <a
                        href="mailto:{{ $message->email }}"
                        class="mt-2 block break-all text-sm font-semibold text-blue-400 transition hover:text-blue-300"
                    >
                        {{ $message->email }}
                    </a>

                </div>


                {{-- Received --}}
                <div>

                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-slate-600">
                        Received
                    </p>

                    <p class="mt-2 text-sm font-semibold text-slate-300">
                        {{ $message->created_at->format('M d, Y') }}
                    </p>

                    <p class="mt-1 text-xs text-slate-600">
                        {{ $message->created_at->format('h:i A') }}
                    </p>

                </div>

            </div>

        </section>


        {{-- Message Status --}}
        <section class="rounded-2xl border border-white/10 bg-white/[0.03] p-6">

            <div class="flex items-center gap-3">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-500/10 text-emerald-400">
                    ✓
                </div>

                <div>

                    <p class="text-sm font-bold text-white">
                        Message Status
                    </p>

                    <p class="mt-1 text-xs text-slate-500">
                        This message has been opened.
                    </p>

                </div>

            </div>

        </section>


    </div>

</div>
```

@endsection

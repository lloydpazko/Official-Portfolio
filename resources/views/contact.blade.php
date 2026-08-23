@extends('layouts.app')

@section('title', 'Contact | Lloyd Paliuanan')

@section('content')

<section class="min-h-screen bg-slate-950 px-6 pb-24 pt-36">

    <div class="mx-auto max-w-6xl">

        {{-- Header --}}
        <div class="max-w-2xl">

            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-blue-500">
                Get In Touch
            </p>

            <h1 class="mt-4 text-4xl font-bold sm:text-5xl">
                Let's work together.
            </h1>

            <p class="mt-5 text-lg leading-8 text-slate-400">
                Have a project, opportunity, or question?
                Send me a message and I'll get back to you.
            </p>

        </div>


        {{-- Contact Layout --}}
        <div class="mt-14 grid gap-8 lg:grid-cols-5">


            {{-- Contact Information --}}
            <div class="lg:col-span-2">

                <div class="rounded-3xl border border-white/10 bg-white/[0.03] p-8">

                    <h2 class="text-2xl font-bold">
                        Contact Information
                    </h2>

                    <p class="mt-3 text-sm leading-6 text-slate-400">
                        You can reach me through the information below.
                    </p>


                    {{-- Email --}}
                    <div class="mt-8">

                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Email
                        </p>

                        <p class="mt-2 text-slate-300">
                            lloydpazko@gmail.com
                        </p>

                    </div>


                    {{-- Phone --}}
                    <div class="mt-6">

                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Contact
                        </p>

                        <p class="mt-2 text-slate-300">
                            +63 975 0922 683
                        </p>

                    </div>


                    {{-- Social --}}
                    <div class="mt-8">

                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">
                            Social Media
                        </p>

                        <div class="mt-4 flex flex-wrap gap-3">

                            <a href="https://www.facebook.com/LloydPPal/"
                               class="rounded-full border border-white/10 px-4 py-2 text-sm text-slate-300 transition hover:border-blue-500/30 hover:text-blue-400">
                                Facebook
                            </a>

                            <a href="https://github.com/lloydpazko"
                               class="rounded-full border border-white/10 px-4 py-2 text-sm text-slate-300 transition hover:border-blue-500/30 hover:text-blue-400">
                                GitHub
                            </a>

                            <a href="https://www.linkedin.com/in/lloydpaliuanan/"
                               class="rounded-full border border-white/10 px-4 py-2 text-sm text-slate-300 transition hover:border-blue-500/30 hover:text-blue-400">
                                LinkedIn
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Contact Form --}}
            <div class="lg:col-span-3">

                <form
                    action="{{ route('contact.store') }}"
                    method="POST"
                    class="rounded-3xl border border-white/10 bg-white/[0.03] p-8 sm:p-10">

                    @if(session('success'))
                            <div class="mb-6 rounded-xl border border-green-500/20 bg-green-500/10 p-4 text-sm text-green-400">
                                {{ session('success') }}
                            </div>
                    @endif
                    
                    @csrf

                    <div class="grid gap-6 sm:grid-cols-2">


                        {{-- Name --}}
                        <div>

                            <label for="name"
                                   class="text-sm font-medium text-slate-300">
                                Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Your name"
                                class="mt-2 w-full rounded-xl border border-white/10 bg-slate-900 px-4 py-3 text-white outline-none placeholder:text-slate-600 focus:border-blue-500"
                            >

                        </div>


                        {{-- Email --}}
                        <div>

                            <label for="email"
                                   class="text-sm font-medium text-slate-300">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="you@example.com"
                                class="mt-2 w-full rounded-xl border border-white/10 bg-slate-900 px-4 py-3 text-white outline-none placeholder:text-slate-600 focus:border-blue-500"
                            >

                        </div>

                    </div>


                    {{-- Subject --}}
                    <div class="mt-6">

                        <label for="subject"
                               class="text-sm font-medium text-slate-300">
                            Subject
                        </label>

                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            placeholder="How can I help?"
                            class="mt-2 w-full rounded-xl border border-white/10 bg-slate-900 px-4 py-3 text-white outline-none placeholder:text-slate-600 focus:border-blue-500"
                        >

                    </div>


                    {{-- Message --}}
                    <div class="mt-6">

                        <label for="message"
                               class="text-sm font-medium text-slate-300">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="7"
                            placeholder="Write your message..."
                            class="mt-2 w-full resize-none rounded-xl border border-white/10 bg-slate-900 px-4 py-3 text-white outline-none placeholder:text-slate-600 focus:border-blue-500"
                        ></textarea>

                    </div>


                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="mt-7 w-full rounded-xl bg-blue-600 px-6 py-3.5 font-semibold transition hover:bg-blue-500 sm:w-auto">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection

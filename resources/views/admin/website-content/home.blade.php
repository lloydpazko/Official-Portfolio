@extends('admin.layouts.app')

@section('title', 'Home Page Content')
@section('page_title', 'Home Page Content')

@section('content')
<div class="mx-auto max-w-4xl space-y-6">

    @if (session('success'))
        <div class="rounded-xl bg-green-500/10 p-4 text-green-400">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="rounded-xl bg-red-500/10 p-4 text-red-400">
            <ul class="list-inside list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="rounded-2xl border border-white/10 bg-slate-900 p-6">
        <h2 class="mb-2 text-xl font-semibold text-white">
            Edit Home Page
        </h2>

        <p class="mb-6 text-sm text-slate-400">
            Update the main title, subtitle, and introduction of your portfolio.
        </p>

        <form
            action="{{ route('admin.website-content.home.update') }}"
            method="POST"
            class="space-y-5"
        >
            @csrf
            @method('PUT')

            <div>
                <label class="mb-2 block text-sm text-slate-300">
                    Main Title
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $contents['title']) }}"
                    required
                    maxlength="255"
                    class="w-full rounded-xl border border-white/10 bg-slate-800 px-4 py-3 text-white"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm text-slate-300">
                    Subtitle
                </label>

                <input
                    type="text"
                    name="subtitle"
                    value="{{ old('subtitle', $contents['subtitle']) }}"
                    maxlength="255"
                    class="w-full rounded-xl border border-white/10 bg-slate-800 px-4 py-3 text-white"
                >
            </div>

            <div>
                <label class="mb-2 block text-sm text-slate-300">
                    Introduction
                </label>

                <textarea
                    name="description"
                    rows="5"
                    maxlength="5000"
                    class="w-full rounded-xl border border-white/10 bg-slate-800 px-4 py-3 text-white"
                >{{ old('description', $contents['description']) }}</textarea>
            </div>

            <button
                type="submit"
                class="rounded-xl bg-blue-600 px-6 py-3 font-medium text-white transition hover:bg-blue-500"
            >
                Save Changes
            </button>
        </form>
    </div>
</div>
@endsection
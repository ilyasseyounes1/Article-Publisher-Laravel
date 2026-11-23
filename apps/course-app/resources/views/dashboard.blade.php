<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.16em] text-indigo-600">Your workspace</p>
                <h2 class="mt-1 text-2xl font-bold tracking-tight text-slate-900">Welcome back, {{ Auth::user()->name }}.</h2>
            </div>
            <a href="{{ route('articles.create') }}" class="rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700">Write an article</a>
        </div>
    </x-slot>

    <div class="bg-slate-50 py-12">
        <div class="mx-auto max-w-7xl space-y-6 px-4 sm:px-6 lg:px-8">
            <div class="grid gap-6 md:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:col-span-2">
                    <p class="text-sm font-semibold text-indigo-600">Keep creating</p>
                    <h3 class="mt-2 text-2xl font-bold tracking-tight text-slate-900">Your ideas deserve a place to grow.</h3>
                    <p class="mt-3 max-w-xl leading-7 text-slate-500">Write and publish thoughtful articles, then share them with the people who want to learn from your perspective.</p>
                    <a href="{{ route('articles.index') }}" class="mt-6 inline-flex items-center font-semibold text-indigo-600 hover:text-indigo-800">Explore articles <span class="ml-2">→</span></a>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-indigo-600 p-6 text-white shadow-sm">
                    <p class="text-sm font-semibold text-indigo-100">Next step</p>
                    <h3 class="mt-2 text-xl font-bold">Publish your first story</h3>
                    <p class="mt-3 text-sm leading-6 text-indigo-100">Turn a rough idea into something useful for someone else.</p>
                    <a href="{{ route('articles.create') }}" class="mt-6 inline-flex rounded-lg bg-white px-4 py-2 text-sm font-bold text-indigo-700 transition hover:bg-indigo-50">Start writing</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

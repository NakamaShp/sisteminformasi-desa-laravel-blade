@extends('layouts.app')

@section('title', $news->title)

@section('content')
<div class="bg-gray-50 px-6 py-24 sm:py-32 lg:px-8">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-12 lg:grid-cols-3">

        <!-- Konten Utama -->
        <main class="lg:col-span-2">
            <div class="text-base leading-7 text-gray-700">

                <!-- Kategori -->
                <div>
                    <a href="#" class="inline-block rounded-full bg-gray-200 px-3 py-1.5 text-sm font-medium text-gray-700 hover:bg-gray-300">
                        {{ $news->newsCategory->title }}
                    </a>
                </div>

                <!-- Judul -->
                <h1 class="mt-4 block text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    {{ $news->title }}
                </h1>

                <!-- Info Penulis -->
                <div class="relative mt-6 flex items-center gap-x-4">
                    <img src="{{ asset('storage/' . $news->author->avatar) }}" alt="Author Avatar" class="size-10 rounded-full bg-gray-200">
                    <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-900">{{ $news->author->name }}</p>
                        <div class="flex items-center gap-x-2 text-gray-500">
                            <time datetime="{{ $news->updated_at->toIso8601String() }}">
                                {{ $news->updated_at->format('M d, Y') }}
                            </time>
                            <span>&middot;</span>
                            <p>{{ $news->author->role }}</p>
                        </div>
                    </div>
                </div>

                <!-- Gambar Utama -->
                <figure class="mt-10">
                    <img class="aspect-video w-full rounded-xl bg-gray-200 object-cover shadow-sm" src="{{ asset('storage/' . $news->thumbnail) }}" alt="Thumbnail Berita">
                </figure>

                <!-- Konten -->
                <div class="mt-10 max-w-none">
                    <div class="prose prose-lg max-w-none text-gray-800 prose-headings:text-gray-900 prose-a:text-indigo-600 hover:prose-a:text-indigo-500 prose-strong:text-gray-900">
                        {!! $news->content !!}
                    </div>
                </div>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="hidden lg:block">
            <div class="sticky top-24">
                <h2 class="text-xl font-semibold leading-6 text-gray-900">Berita Terkait</h2>
                <div class="mt-6 space-y-8">
                    @if(isset($categories) && $categories->count() > 0)
                    @foreach ($categories as $category)
                    <article class="relative flex items-start gap-x-4">
                        <img src="{{ asset('storage/' . $category->thumbnail) }}" alt="Thumbnail Berita Terkait" class="size-16 flex-none rounded-lg bg-gray-100 object-cover">
                        <div class="min-w-0">
                            <a href="{{ route('news.show', $category->slug) }}" class="text-xs relative z-10 rounded-full bg-gray-100 px-2.5 py-1 font-medium text-gray-700 hover:bg-gray-200">
                                {{ $category->newsCategory->title }}
                            </a>
                            <h3 class="mt-2 text-sm font-semibold text-gray-900 group-hover:text-gray-700">
                                <a href="{{ route('news.show', $category->slug) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ Str::limit($category->title, 45) }}
                                </a>
                            </h3>
                        </div>
                    </article>
                    @endforeach
                    @else
                    <p class="text-gray-500">Tidak ada berita terkait.</p>
                    @endif
                </div>
            </div>
        </aside>

    </div>
</div>

<!-- Berita Unggulan -->
<div class="bg-gray-50 pt-24 sm:pt-10 pb-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-2xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Berita Unggulan</h2>
            <p class="mt-2 text-lg text-gray-600">Kumpulan berita pilihan yang sedang hangat dibicarakan.</p>
        </div>

        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach ($newests as $newest)
            <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs text-gray-500">
                    <time datetime="2020-03-16">{{ $newest->updated_at->format('M d, Y') }}</time>
                    <a href="#" class="relative z-10 rounded-full bg-gray-100 px-3 py-1.5 font-medium text-gray-700 hover:bg-gray-200">
                        {{ $newest->newsCategory->title }}
                    </a>
                </div>
                <div class="group relative grow pt-4">
                    <img src="{{ asset('storage/' . $newest->thumbnail) }}" style="background-size: cover; background-position: center; display: block; width: 100%; height: 200px; border-radius: 0.5rem; margin-bottom: 1.25rem;">
                    <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-gray-700">
                        <a href="{{ route('news.show', $newest->slug) }}">
                            <span class="absolute inset-0"></span>
                            {{ Str::limit(strip_tags($newest->title), 50) }}
                        </a>
                    </h3>
                    <p class="mt-5 line-clamp-3 text-sm text-gray-600">
                        {{ Str::limit(strip_tags($newest->content), 200) }}
                    </p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="{{ asset('storage/' . $newest->author->avatar) }}" class="size-10 rounded-full bg-gray-100" />
                    <div class="text-sm">
                        <p class="font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                {{ $newest->author->name }}
                            </a>
                        </p>
                        <p class="text-gray-500">{{ $newest->author->role }}</p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</div>
@endsection
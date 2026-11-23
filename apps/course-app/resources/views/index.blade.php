@extends('layouts.article')

@section('title', 'Explore articles | Article Desk')

@section('content')
    <div class="article-container">
        <header class="page-intro">
            <div>
                  <p class="eyebrow">Ideas worth sharing</p>
                <h1 class="page-title">Find your next good read.</h1>
                <p class="page-subtitle">Thoughtful stories, practical lessons, and fresh perspectives from the Article Desk community.</p>
              </div>
            @auth
                <a class="button" href="{{ route('articles.create') }}">Write an article <span aria-hidden="true">&nbsp;→</span></a>
            @endauth
        </header  >

        @forelse ($articles as $article)
            @if ($loop->first)<div class="article-grid">@endif
            <article class="article-card">
                <div>
                    <p class="eyebrow">Featured story</p>
                    <h2 class="article-card__title"><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></h2>
                    <p class="article-card__excerpt">{{ \Illuminate\Support\Str::limit($article->body, 180) }}</p>
                </div>
                <div class="article-card__footer">
                    <span>{{ $article->created_at?->format('M j, Y') ?? 'Recently published' }}</span>
                    <a class="article-card__read" href="{{ route('articles.show', $article) }}">Read story&nbsp; →</a>
                </div>
            </article>
            @if ($loop->last)</div>@endif
        @empty
            <div class="empty-state">
                <p>No articles have been published yet   .</p>
                @auth
                    <a class="button" href="{{ route('articles.create') }}">Publish the first one</a>
                @endauth
            </div>
        @endforelse
    </div>
@endsection

@extends('layouts.article')

@section('title', $article->title . ' | Article Desk')

@section('content')
    <div class="article-container">
        <article class="article-detail">
            <a class="article-detail__back" href="{{ route('articles.index') }}">←&nbsp; Back to all stories</a>
            <p class="eyebrow">Article Desk story</p>
            <h1 class="article-title">{{ $article->title }}</h1>
            <div class="article-body">{{ $article->body }}</div>
        </article>
    </div>
@endsection

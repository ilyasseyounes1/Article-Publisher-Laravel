<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Article Desk')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="article-shell">
        <nav class="article-nav">
            <div class="article-nav__inner">
                <a class="brand" href="{{ route('articles.index') }}">
                    <span class="brand__mark">A</span>
                    <span>Article Desk</span>
                </a>
                <div class="article-nav__links">
                    <a class="article-nav__link" href="{{ route('articles.index') }}">Explore</a>
                    @auth
                        <a class="article-nav__link" href="{{ route('dashboard') }}">Dashboard</a>
                    @endauth
                </div>
                <div class="article-nav__actions">
                    @auth
                        <span class="user-label">{{ Auth::user()->name }}</span>
                        <a class="button" href="{{ route('articles.create') }}">Write</a>
                    @else
                        @if (Route::has('login'))
                            <a class="article-nav__link" href="{{ route('login') }}">Log in</a>
                        @endif
                        @if (Route::has('register'))
                            <a class="button" href="{{ route('register') }}">Get started</a>
                        @endif
                    @endauth
                </div>
            </div>
        </nav>
        <main class="article-main">
            @yield('content')
        </main>
    </div>
</body>
</html>

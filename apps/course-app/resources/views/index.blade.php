<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Article Desk</title>
</head>
<body>
    <h1>Article Desk</h1>

    @forelse ($articles as $article)
        <article>
            <h2>{{ $article->title }}</h2>
            <p>{{ \Illuminate\Support\Str::limit($article->body, 160) }}</p>
        </article>
    @empty
        <p>No articles yet.</p>
        <h1>Article feed test</h1>
    @endforelse
</body>
</html>
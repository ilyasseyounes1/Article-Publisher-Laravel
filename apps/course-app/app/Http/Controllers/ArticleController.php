<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::orderByDesc('id')->get();

        return view('index', ['articles' => $articles]);
    }

    public function show(Article $article): View
    {
        return view('show', ['article' => $article]);
    }

    public function create(): View
    {
        return view('create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
        ]);

        $article = new Article;
        $article->title = $data['title'];
        $article->body = $data['body'];
        $article->save();

        return redirect()->route('articles.show', ['article' => $article->id]);
    }
}
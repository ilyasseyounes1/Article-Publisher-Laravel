<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('id')->get();

        return view('index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('show', ['article' => $article]);
    }
}
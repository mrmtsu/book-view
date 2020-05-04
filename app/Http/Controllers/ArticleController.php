<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');    
    }

    public function store(ArticleRequest $request, Article $article)
    {
        $now = Carbon::now();
        $article = $request->all();
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    if ($request->hasFile('image')) {
        $request->file('image')->store('/public/images');
        $data = ['user_id' => \Auth::id(), 'title' => $article['title'], 'body' => $article['body'], 'image' => $request->file('image')->hashName(), 'created_at' => $now, 'updated_at' => $now];
    } else {
        $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body'], 'created_at' => $now, 'updated_at' => $now];
    }
        Article::insert($data);
        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);    
    }
}

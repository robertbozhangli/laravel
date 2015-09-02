<?php


namespace App\Http\Controllers;
use \App\Article;
use App\Http\Requests\ArticleRequest;
use illuminate\HttpRequest;
use Request;
//use illuminate\HttpResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create(Request::all());
        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, Requests\ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}


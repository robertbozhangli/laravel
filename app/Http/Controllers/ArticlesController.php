<?php


namespace App\Http\Controllers;
use \App\Article;
use App\Http\Requests\ArticleRequest;
use illuminate\HttpRequest;
use Request;
use Session;
//use illuminate\HttpResponse;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth', ['only' => 'create']);
    }

    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Requests\ArticleRequest $request)
    {
        //Article::create(Request::all());
        Auth::user()->articles()->save(new Article($request->all()));

//        Session::flash('flash_message', 'Your article has been created!');
//        Session::flash('flash_message_important', 'true');

        flash('Your article has been created');
        return redirect('articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, Requests\ArticleRequest $request)
    {
        $article->update($request->all());

        return redirect('articles');
    }
}


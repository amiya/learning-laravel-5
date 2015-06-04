<?php

namespace App\Http\Controllers;

//use App\Article;
//use App\Http\Requests;
//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use App\Http\Requests\ArticleRequest;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;

//use Request;

class ArticleController extends Controller
{

    public function index()
    {     
        //return "Show All Content";
        //$articles = Article::all();
        $articles = Article ::latest('created_at')->published()->get();
        //dd($articles);         
        //return $articles;
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        //return "Article Details";
        $article = Article::findOrFail($id);

        //dd($article->published_at);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.add');
    }

    public function store(ArticleRequest $request)
    {

        
        // $intput = Request::all();
        // $intput['published_at'] = Carbon::now();
        // Article::create(Request::all());
        // using validation apply
        //Article::create($request->all());
        
        $article = new Article($request->all());
        
        Auth::user()->articles()->save($article);

        return redirect('article');
    }

    // validation in controller
//    public function store(Request $request)
//    {
//        $this->validate($request, ['title' =>'required', 'body' =>'required']);
//        
//        // using validation apply
//        Article::create($request->all());
//
//        return redirect('article');
//    }


    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    
    
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        
        $article->update($request->all());
        
        return redirect('article ');
    }

}

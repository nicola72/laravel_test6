<?php

namespace App\Http\Controllers;

use App\Article;
use App\Country;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(4);
        $users = User::all();
        $tags = Tag::all();
        return view('articles.index',compact('articles','users','tags'));
    }

    public function main()
    {
        $articles = Article::where('user_id', 2)->orderBy('title','desc')->take(4)->get();
        $tags = Tag::all();
        return view('welcome',['articles'=>$articles,'tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $tags = Article::find($article->id)->tags;
        $article = Article::find($article->id);
        //$comments = $article->comments;
        $user = User::find($article->user_id);
        $country = Country::where('id',$user->country_id)->get()->first();

        return view('articles.show',compact('tags','article','country'));
    }

    public function articles($id)
    {
        $user = User::find($id);
        return view('articles.articles',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}

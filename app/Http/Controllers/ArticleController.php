<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function updatearticle(Article $article) 
    {
        return view('dashboard.updatearticle',compact('article'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->writer = $request->writer;

        // Process image path using storage
        $path = $request->file('picture')->store('images','public');
        $article->picture = $path;

        $article->save();
        return redirect('/article');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $articles = Article::all();
        return view('dashboard.article',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->title = $request->title;
        $article->content = $request->content;
        $article->writer = $request->writer;

        // Process image path using storage
        $path = $request->file('picture')->store('images','public');
        $article->picture = $path;

        $article->save();
        return redirect('/article');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // Delete image from storage
        Storage::delete('public/'.$article->picture);
        $article->delete();
        return redirect('/article');
    }
}

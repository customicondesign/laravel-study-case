<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Show the application dashboard.
     * @param
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('article', compact('articles'));
    }

    /**
     * Show the application dashboard.
     * @param
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body'  => 'required',
            'tags'  => 'required',
        ]);

        $input = $request->all();
        $tags = explode(",", $request->tags);

        $article = Article::create($input);
        $article->tag($tags);

        return back()->with('success', 'Article created successfully.');
    }
}

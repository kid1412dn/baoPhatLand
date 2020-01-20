<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{
    public function about()
	{
		return view('about',[
    	'articles'=> Article::take(3)->latest()->get(),
    	]);
	}

	public function show(Article $article)
	{
		// $articles = Article::findOrFail($id);
		// return $article;
		return view('articles.show',[
			'article'=> $article,
		]);
	
	}

	public function page()
	{
		return view('articles',[
    	'articles'=> Article::latest()->get(),
    	]);
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store()
	{
		//persist the new article
		// dump(request()->all());
		// die('hello');
		$article= new Article();

		$article->title = request('title');
		$article->except = request('except');
		$article->body = request('body');

		$article->save();
		return redirect('/articles');
	}

	public function edit($id)
	{
		return view('articles.edit',[
			'article'=> Article::find($id),
		]);
	}

	public function update($id)
	{
		$article = Article::find($id);
		$article->title = request('title');
		$article->except = request('except');
		$article->body = request('body');

		$article->save();
		return redirect('/articles/'.$article->id);
	}

	public function destroy($id)
	{
		Article::find($id)->delete();
		echo "delete";
		
	}
}

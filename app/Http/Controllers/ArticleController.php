<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'sous_lot_id' => 'required|exists:sous_lots,id',
            'code' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'quantite' => 'required|integer|min:0',
            'prix_unitaire' => 'required|numeric|min:0',
            'budget' => 'required|numeric|min:0',
            'realisation' => 'required|numeric|min:0',
            'marge_estimee' => 'required|numeric|min:0',
        ]);

        Article::create($validated);

        return redirect()->route('articles.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'sous_lot_id' => 'required|exists:sous_lots,id',
            'code' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'quantite' => 'required|integer|min:0',
            'prix_unitaire' => 'required|numeric|min:0',
            'budget' => 'required|numeric|min:0',
            'realisation' => 'required|numeric|min:0',
            'marge_estimee' => 'required|numeric|min:0',
        ]);

        $article->update($validated);

        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index');
    }
}
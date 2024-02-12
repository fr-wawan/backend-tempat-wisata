<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(request('paginate'));

        return response()->json([
            'data' => $articles
        ]);
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();

        return response()->json([
            'data' => $article
        ]);
    }
}

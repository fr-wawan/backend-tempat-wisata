<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleCommentRequest;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(request('paginate'));

        return response()->json([
            'data' => $articles
        ]);
    }

    public function indexComment($article_id)
    {
        $comments = ArticleComment::orderBy('created_at', 'desc')->where('article_id', $article_id)->paginate(10);

        return response()->json([
            'data' => $comments
        ]);
    }

    public function storeComment(ArticleCommentRequest $request, ArticleService $service)
    {
        $validated = $request->validated();

        $service->storeComment($validated);

        return response()->json([
            'message' => 'Komen Berhasil!'
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

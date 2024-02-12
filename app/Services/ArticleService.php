<?php

namespace App\Services;

use App\Models\Article;
use App\Models\ArticleComment;

class ArticleService
{
    public function storeComment($data)
    {
        $comment = ArticleComment::create($data);

        return $comment;
    }
}

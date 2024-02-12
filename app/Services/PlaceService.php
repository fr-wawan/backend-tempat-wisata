<?php

namespace App\Services;

use App\Models\PlaceComment;

class PlaceService
{
    public function storeComment($params)
    {
        $comment =  PlaceComment::create($params);

        return $comment;
    }
}

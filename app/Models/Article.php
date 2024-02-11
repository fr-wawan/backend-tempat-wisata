<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ['id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
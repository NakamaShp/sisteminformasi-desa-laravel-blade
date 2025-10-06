<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['author_id', 'news_category_id', 'title', 'slug', 'thumbnail', 'content','is_featured'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }

    
}


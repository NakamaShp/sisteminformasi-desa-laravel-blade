<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['news_id'];

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}

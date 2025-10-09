<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeBanner extends Model
{
    use HasFactory;
    
    protected $table = 'homebanners'; 
    
    protected $fillable = ['title', 'image', 'order', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}

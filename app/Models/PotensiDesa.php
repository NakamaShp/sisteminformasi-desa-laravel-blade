<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotensiDesa extends Model
{

    protected $table = 'village_potentials';
    protected $fillable = [
        'title',
        'image',
        'description',
    ];
}

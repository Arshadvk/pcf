<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'title_ar',
        'short_description',
        'description',
        'short_description_ar',
        'description_ar',
        'image'

    ];
}

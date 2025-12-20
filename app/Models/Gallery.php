<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'image',
        'title',
        'emirates',
        'url',
    ];

    public function emirate()
    {
        return $this->belongsTo(Emirate::class, 'emirates');
    }
}

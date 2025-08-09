<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'emirates',
        'image',
        'position'

    ];

    // Committee.php
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function emirate()
    {
        return $this->belongsTo(Emirate::class);
    }
}

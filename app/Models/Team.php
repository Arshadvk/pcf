<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
    'name',
    'name_ar',
    'position',
    'position_ar',
    'image' 
     ];
}

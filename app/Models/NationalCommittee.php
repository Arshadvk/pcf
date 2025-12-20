<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalCommittee extends Model
{
    use HasFactory;
    
    protected $fillable = ['year', 'is_active'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($committee) {
            // If this one is being set active, deactivate others
            if ($committee->is_active) {
                static::where('id', '!=', $committee->id)
                    ->update(['is_active' => false]);
            }
        });
    }
}

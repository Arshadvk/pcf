<?php

namespace App\Models;

use App\Models\NationalCommittee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'emirates',
        'image',
        'position_id',
        'committee_type',
        'national_committee_id',

    ];

    // Committee.php
    public function position1()
    {
        return $this->belongsTo(Position::class,'position_id');
    }
    public function emirate()
    {
        return $this->belongsTo(Emirate::class, 'emirates');
    }
    public function committeeYear()
    {
        return $this->belongsTo(NationalCommittee::class, 'national_committee_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($committee) {

            if ($committee->committee_type === 'national' && empty($committee->national_committee_id)) {
                throw new \Exception("national_committee_id is required for national committee type.");
            }

            if ($committee->committee_type === 'emirates') {
                $committee->national_committee_id = null;
            }
            if ($committee->committee_type === 'leaders') {
                // Both are optional → force them to null
                $committee->emirates = null;
                $committee->national_committee_id = null;
            }
        });
    }
}

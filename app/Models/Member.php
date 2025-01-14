<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'mobile',
        'dob',
        'whatsapp',
        'blood_group',
        'emirates',
        'image',
        'profession',
        'zone',
        'membership_type',
        'membership_number',
        'issued',
        'expiry', 
        'gender' ,


        'house_name',
        'district',
        'panjayath',
        'pin',
        'mandalam',
        'before_pdp',
    ];
}

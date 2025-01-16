<?php

namespace App;

use Mail;
use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'zone', 'plot_info', 'website', 'multiple', 'description'
    ];

    public static function boot() {
        parent::boot();

        static::created(function ($item) {

            $adminEmail = ["arshad7560@gmail.com"];
            Mail::to($adminEmail)->send(new ContactMail($item));

            // Check if the name is "RobertBeefe"
            // if ($item->name !== 'RobertBeefe') {
            // $adminEmail = ["shaheen.maxhome@gmail.com" ];
            // }
        });
    }
}

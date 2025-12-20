<?php

namespace Database\Seeders;

use App\Models\Emirate;
use Illuminate\Database\Seeder;

class EmirateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Emirate::updateOrCreate([
            'name' => 'Abu Dhabi',
            'count' => 0,
        ]);

        Emirate::updateOrCreate([
            'name' => 'Dubai',
            'count' => 0,
        ]);

        Emirate::updateOrCreate([
            'name' => 'Sharjah',
            'count' => 0,
        ]);


        Emirate::updateOrCreate([
            'name' => 'Ajman',
            'count' => 0,
        ]);

        Emirate::updateOrCreate([
            'name' => 'Umm Al Quwain',
            'count' => 0,
        ]);

        Emirate::updateOrCreate([
            'name' => 'Ras Al Khaimah',
            'count' => 0,
        ]);
        Emirate::updateOrCreate([
            'name' => 'Fujairah',
            'count' => 0,
        ]);
        Emirate::where('name', 'Al Ain')
        ->update([
            'name' => 'Al Ain (AD)',
            'count' => 0,
        ]);
        Emirate::updateOrCreate([
            'name' => 'Al Ain (AD)'],
            ['count' => 0]
        );
    }
}

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
        Emirate::create([
            'name' => 'Abu Dhabi',
            'count' => 0,
        ]);

        Emirate::create([
            'name' => 'Dubai',
            'count' => 0,
        ]);

        Emirate::create([
            'name' => 'Sharjah',
            'count' => 0,
        ]);


        Emirate::create([
            'name' => 'Ajman',
            'count' => 0,
        ]);

        Emirate::create([
            'name' => 'Umm Al Quwain',
            'count' => 0,
        ]);

        Emirate::create([
            'name' => 'Ras Al Khaimah',
            'count' => 0,
        ]);
        Emirate::create([
            'name' => 'Fujairah',
            'count' => 0,
        ]);
    }
}

<?php

namespace Database\Seeders;
use App\Models\User; // Add this line to import the User model
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         if (User::count() > 0) {
            return; // Stop seeder (do nothing)
        }
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'arshad@maxhome.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Abu Dhabi Admin',
            'emirate' => 'Abu Dhabi' ,
            'email' => 'auh@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Dubai Admin',
            'emirate' => 'Dubai' ,
            'email' => 'dxb@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Sharjah Admin',
            'emirate' => 'Sharjah' ,
            'email' => 'shj@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Ajman Admin',
            'emirate' => 'Ajman' ,
            'email' => 'ajm@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Umm Al Quwain Admin',
            'emirate' => 'Umm Al Quwain' ,
            'email' => 'uaq@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Ras Al Khaimah Admin',
            'emirate' => 'Ras Al Khaimah' ,
            'email' => 'rak@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Fujairah Admin',
            'emirate' => 'Fujairah' ,
            'email' => 'fuj@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'Al Ain Admin',
            'emirate' => 'Al Ain Admin' ,
            'email' => 'aan@pcfgcc.com',
            'password' => Hash::make('12345678'),
        ]);

        
    }
}

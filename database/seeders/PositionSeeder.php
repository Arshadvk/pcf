<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ['name' => 'president', 'name_mal' => 'പ്രസിഡന്റ്'],
            ['name' => 'secretary', 'name_mal' => 'സെക്രട്ടറി'],
            ['name' => 'treasurer', 'name_mal' => 'ട്രഷറർ'],
            ['name' => 'joint secretary', 'name_mal' => 'ജോ: സെക്രട്ടറിമാർ'],
            ['name' => 'vice president', 'name_mal' => 'വൈസ് പ്രസിഡന്റുമാർ'],
            ['name' => 'council member', 'name_mal' => 'കൗൺസിൽ അംഗങ്ങൾ'],
            ['name' => 'secretariat member', 'name_mal' => 'സെക്രട്ടറിയേറ്റ് അംഗങ്ങൾ'],            
            ['name' => 'global member', 'name_mal' => 'ഗ്ലോബൽ അംഗങ്ങൾ'],         
            ['name' => 'chairman', 'name_mal' => 'ചെയർമാൻ'],                     
            ['name' => '"vice chairmen"', 'name_mal' => 'വൈസ് ചെയർമാൻമാർ'],         
            ['name' => 'General Secretary', 'name_mal' => 'ജനറല്‍ സെക്രട്ടറിമാര്‍'],
        ];

        foreach ($positions as $position) {
            Position::updateOrCreate($position);
        }
    }
}

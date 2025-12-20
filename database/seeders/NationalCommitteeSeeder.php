<?php

namespace Database\Seeders;

use App\Models\Committee;
use App\Models\NationalCommittee;
use Illuminate\Database\Seeder;

class NationalCommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         if (NationalCommittee::count() == 0) {
            $nationalCommittee = NationalCommittee::updateOrCreate([
                'year' => '2024-2025',
                'is_active' => true,
            ]);
        } else {
            $nationalCommittee = NationalCommittee::updateOrCreate(
                ['year' => '2024-2025'],
                ['is_active' => true]
            );
        }
         

        $members = [
            [
                'name' => 'Abdulkadher Kothachira',
                'position_id' => 1,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/1.jpeg',
            ],
            [
                'name' => 'KPA Rafeek',
                'position_id' => 2,
                'committee_type' => 'national',
                'image' => '/assets/assets/img/pcf/3.jpg',
            ],
            [
                'name' => 'Ismail Arikkadi',
                'position_id' => 3,
                'committee_type' => 'national',
                'image' => '/assets/assets/img/pcf/2.jpg',
            ],
            [
                'name' => 'മുഹമ്മദ് സാഹിബ്',
                'position_id' => 5,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/4.jpeg',
            ],
            [
                'name' => 'ഷാരിസ് കള്ളിയത്ത്:',
                'position_id' => 5,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/8.jpeg',
            ],
            [
                'name' => 'റാഷിദ് സുൽത്താൻ',
                'position_id' => 5,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/5.jpeg',
            ],
            [
                'name' => 'മുനീർ നന്നബ്ര',
                'position_id' => 5,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/15.jpg',
            ],
            [
                'name' => 'ജംഷാദ് ഇല്ലിക്കൽ',
                'position_id' => 4,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/6.jpeg',
            ],
            [
                'name' => 'ഇബ്രാഹിം പട്ടിശ്ശേര',
                'position_id' => 4,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/7.jpeg',
            ],
            [
                'name' => 'റഹീസ് കാർത്തികപ്പള്ളി',
                'position_id' => 4,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/10.jpeg',
            ],
            [
                'name' => 'ഇസ്മയിൽ സി.പി നന്നബ',
                'position_id' => 4,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/9.jpeg',
            ],
            [
                'name' => 'ഇസ്മയിൽ നാട്ടിക',
                'position_id' => 8,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/11.jpeg',
            ],
            [
                'name' => 'അസീസ് സേട്ട്',
                'position_id' => 8,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/13.jpeg',
            ],
            [
                'name' => 'ഇല്യാസ് തലശ്ശേരി',
                'position_id' => 8,
                'committee_type' => 'national',
                'image' => '/assets/img/pcf/14.jpeg',
            ],
            [
                'name' => 'അബ്ദുന്നാസർ മഅദനി',
                'position_id' => 9,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/chairman.jpg',
            ],
            [
                'name' => 'വർക്കല രാജ്',
                'position_id' => 10,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/9.jpg',
            ],
            [
                'name' => 'അഡ്വ. മുട്ടം നാസർ',
                'position_id' => 10,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/7.jpg',
            ],
            [
                'name' => 'ടി. എ. മുഹമ്മദ് ബിലാൽ',
                'position_id' => 10,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/2.jpg',
            ],
            [
                'name' => 'സിയാവുദ്ദീൻ തങ്ങൾ പാലക്കാട്',
                'position_id' => 10,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/1.jpg',
            ],
            [
                'name' => 'ശശി പൂവഞ്ചിന',
                'position_id' => 9,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/13.jpg',
            ],
            [
                'name' => 'വി.എം.അലിയാര്‍',
                'position_id' => 11,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/6.jpg',
            ],
            [
                'name' => 'അജിത്കുമാര്‍ ആസാദ്',
                'position_id' => 11,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/8.jpg',
            ],
            [
                'name' => 'മുഹമ്മദ് റജീബ്',
                'position_id' => 11,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/14.jpg',
            ],
            [
                'name' => 'മജീദ് ചേര്‍പ്പ്',
                'position_id' => 11,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/5.jpg',
            ],
            [
                'name' => 'മൈലക്കാട് ഷാ',
                'position_id' => 11,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/10.jpg',
            ],
            [
                'name' => 'ജാഫര്‍അലി ദാരിമി',
                'position_id' => 11,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/11.jpg',
            ],
            [
                'name' => 'സലിം ബാബു',
                'position_id' => 2,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/12.jpg',
            ],
            [
                'name' => 'രാജിമണി തൃശൂര്‍',
                'position_id' => 2,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/4.jpg',
            ],
            [
                'name' => 'ഇബ്രാഹീം തിരൂരങ്ങാടി',
                'position_id' => 3,
                'committee_type' => 'leaders',
                'image' => 'assets/img/leader/3.jpg',
            ]
        ];

        foreach ($members as $member) {
            Committee::updateOrCreate(
                [
                    'name' => $member['name'], 
                ],
                [
                    'position_id' => $member['position_id'],
                    'image' => $member['image'],
                    'committee_type' => $member['committee_type'],
                    'national_committee_id' => $nationalCommittee->id,
                    'emirates' => null, 
                ]
            );
        }
    }
}

<?php

namespace App\Imports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Member([
            'name'  => $row[0], // Assuming name is in the first column
            'email' => $row[1],
            'image' => $row[1],
            'mobile' => $row[1],
        ]);
    }
}

<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    protected $emirates;

    public function __construct($emirates)
    {
        $this->emirates = $emirates;
    }

    public function collection()
    {
        if ($this->emirates == 'all' || !$this->emirates) {
            // If 'All Emirates' is selected, return all users
            return Member::where('status', 'verified')
            ->get(['id', 'membership_number', 'name', 'email', 'mobile', 'dob', 'whatsapp', 'blood_group', 'emirates', 'profession', 'zone', 'house_name', 'district', 'mandalam', 'panjayath', 'pin', 'before_pdp', 'membership_type', 'issued', 'expiry']);
        }

        // Otherwise, return users filtered by the selected emirate
        return Member::where('emirates', $this->emirates)
            ->where('status', 'verified')
            ->get(['id', 'membership_number', 'name', 'email', 'mobile', 'dob', 'whatsapp', 'blood_group', 'emirates', 'profession', 'zone', 'house_name', 'district', 'mandalam', 'panjayath', 'pin', 'before_pdp', 'membership_type', 'issued', 'expiry']);
    }

    public function headings(): array
    {
        return ['ID', 'Membership Number', 'Name', 'Email', 'Mobile', 'Date of Birth', 'Whatsapp', 'Blood Group', 'Emirates', 'Profession', 'Zone', 'House Name', 'District', 'Mandalam', 'Panjayath', 'Pin', 'Before Pdp', 'Type', 'Issued', 'Expiry'];
    }
}

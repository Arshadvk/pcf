<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    protected $emirates;
    protected $selectedFields;

    public function __construct($emirates, $selectedFields)
    {
        $this->emirates = $emirates;
        $this->selectedFields = $selectedFields;
    }

    public function collection()
    {
         // Base query to fetch only approved members
    $query = Member::query()->where('status', 'approved');

    // If a specific emirate is selected, apply a filter
    if ($this->emirates && $this->emirates !== 'all') {
        $query->where('emirates', $this->emirates);
    }

    // Return the query results with only the selected fields
    return $query->get($this->selectedFields);
    }

    public function headings(): array
    {
        return array_map('ucwords', str_replace('_', ' ', $this->selectedFields)); // Convert field names to readable headings
    }
}

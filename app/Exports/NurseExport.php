<?php

namespace App\Exports;

use App\Nurse;
use Maatwebsite\Excel\Concerns\FromCollection;

class NurseExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Nurse::all();
    }
}

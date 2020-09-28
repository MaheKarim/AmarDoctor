<?php

namespace App\Exports;

use App\Doctor;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DoctorsExport implements FromCollection
{
    public function collection()
    {
        return Doctor::all();
    }
}

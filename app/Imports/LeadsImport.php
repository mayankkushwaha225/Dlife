<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;

class LeadsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Lead([
            'first_name' => $row[0],
            'last_name' => $row[1],
            'email' => $row[1],
            'phone' => $row[2],
        ]);
    }
}

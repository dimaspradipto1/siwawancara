<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;

class UserImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make($row['password']),
                'is_admin' => $row['is_admin'],
                'is_interviewer' => $row['is_interviewer'],
                'is_timtes' => $row['is_timtes'],
            ]);
        }
    }

    
}

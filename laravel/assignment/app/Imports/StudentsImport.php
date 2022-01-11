<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    /**
     * Import Function
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'id'     => $row['id'],
            'name'     => $row['name'],
            'age'    => $row['age'],
            'major_id'    => $row['major_id'],
<<<<<<< HEAD
            'email'    => $row['email'],
=======
>>>>>>> a39aeb12da0187907b2813aee10ee0dabb6df30a
            'created_at'    => $row['created_at'],
            'updated_at'    => $row['updated_at'],
        ]);
    }
}

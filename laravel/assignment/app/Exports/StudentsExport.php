<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Student::all();
    }

    /**
     * heading function
     * @return \Illuminate\Support\headings
     */
    public function headings(): array
    {
        return [
            "id",
            "name",
            "age",
            "major_id",
<<<<<<< HEAD
            "email",
=======
>>>>>>> a39aeb12da0187907b2813aee10ee0dabb6df30a
            "created_at",
            "updated_at"
        ];
    }
}

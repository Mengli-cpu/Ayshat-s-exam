<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Student::create(
            [
                'name' => 'Aman',
                'surname' => 'Myradow',
                'birth_date' => "08.08.2012",
                'gender' => 'M',
                'school_num' => 45,
                'grade' => 8,
                'parent_phone' => '344322344',
                'class_num' => 7,
                'city' => 'Ashgabat',
                'adress' => 'msnkldnkflndlkfn',
            ]
        );
    }
}

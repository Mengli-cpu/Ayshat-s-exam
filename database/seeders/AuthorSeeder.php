<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Aman',
                'surname' => 'Myradow',
                'email' => 'aman_myradow@gmail.com',
                'birth_date' => '1995-05-05',
            ],
            [
                'name' => 'Myrat',
                'surname' => 'Amanow',
                'email' => 'myrat@gmail.com',
                'birth_date' => '2000-12-05',
            ],
            [
                'name' => 'Meret',
                'surname' => 'Durdyyew',
                'email' => 'meret@gmail.com',
                'birth_date' => '1999-04-03',
            ],
            [
                'name' => 'Leyli',
                'surname' => 'Rejepowa',
                'email' => 'leyli@gmail.com',
                'birth_date' => '2003-04-26',
            ],
            [
                'name' => 'Jennet',
                'surname' => 'Glyjowa',
                'email' => 'jennett.glyjova@gmail.com',
                'birth_date' => '1998-02-01',
            ],

        ];
        foreach ($authors as $i) {
            \App\Models\Author::create([
                'name'=>$i['name'],
                'surname'=>$i['surname'],
                'email'=>$i['email'],
                'birth_date'=>$i['birth_date'],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Education',
            'Sport',
            'Economy',
            'Politicy',
            'Travel',
            'Business',
            'IT',
            'Astronomy',
            'Weathers',
            'Health',
            'Others',
        ];
        foreach ($categories as $i) {
            \App\Models\Category::create([
                'name' => $i
            ]);
        }
    }
}

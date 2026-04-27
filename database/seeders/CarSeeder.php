<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Car::create(
            [
                'name' => 'BMW M3 GB0 2025',
                'price' => 25000,
                'year' => 2025,
                'brand' => 'BMW',
                'model' => 'M3 GB0',
                'color' => 'white',
                'engine' => 4.6,
                'location' => 'Ashgabat',
                'is_credit' => true,
                'is_exchanged' => false,
                'code' => '23dn5j6',
                'owner' => 'Rahman Akynow',
                'description' => "Yagdayy gowy",
            ]
        );
        \App\Models\Car::create(
            [
                'name' => 'BMW M3 GB0 2025',
                'price' => 25000,
                'year' => 2025,
                'brand' => 'BMW',
                'model' => 'M3 GB0',
                'color' => 'white',
                'engine' => 4.6,
                'location' => 'Ashgabat',
                'is_credit' => true,
                'is_exchanged' => false,
                'code' => '23dn5j6',
                'owner' => 'Rahman Akynow',
                'description' => "Yagdayy gowy",
            ]
        );
        \App\Models\Car::create(
            [
                'name' => 'BMW M3 GB0 2025',
                'price' => 25000,
                'year' => 2025,
                'brand' => 'BMW',
                'model' => 'M3 GB0',
                'color' => 'white',
                'engine' => 4.6,
                'location' => 'Ashgabat',
                'is_credit' => true,
                'is_exchanged' => false,
                'code' => '23dn5j6',
                'owner' => 'Rahman Akynow',
                'description' => "Yagdayy gowy",
            ]
        );
        \App\Models\Car::create(
            [
                'name' => 'BMW M3 GB0 2025',
                'price' => 30000,
                'year' => 2025,
                'brand' => 'BMW',
                'model' => 'M3 GB0',
                'color' => 'white',
                'engine' => 4.7,
                'location' => 'Ashgabat',
                'is_credit' => true,
                'is_exchanged' => false,
                'code' => '3ir85ue9',
                'owner' => 'Aman Myradow',
                'description' => "Yagdayy gowy",
            ]
        );
        \App\Models\Car::create(
            [
                'name' => 'Toyota 2025',
                'price' => 28000,
                'year' => 2025,
                'brand' => 'Toyota',
                'model' => 'N2iw32',
                'color' => 'gray',
                'engine' => 5.6,
                'location' => 'Ashgabat',
                'is_credit' => true,
                'is_exchanged' => true,
                'code' => '39ej49ru48',
                'owner' => 'Meret Durdyyew',
                'description' => "Yagdayy gowy",
            ]
        );
    }
}

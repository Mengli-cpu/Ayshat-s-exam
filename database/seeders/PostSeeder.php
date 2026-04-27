<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'author_id' => 1,
                'category_id' =>2,
                'title' => 'Yazylshyklar bashlady',
                'content' => 'Täze okuw ýyly üçin yazylyşyklar başlady!',
                'date' => '2026-03-01 12:56:03',
                'view_count' => 5000,
                'like_count' => 3000,
            ],
            [
                'author_id' => 5,
                'category_id' =>2,
                'title' => 'Howa maglumatlar',
                'content' => " Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim dolorum mollitia numquam sapiente dignissimos dolor!" ,
                'date' => '2026-04-06 12:56:03',
                'view_count' => 4000,
                'like_count' => 2000,
            ],
            [
                'author_id' => 2,
                'category_id' => 9,
                'title' => 'Taze tazelikler',
                'content' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quas asperiores delectus illum earum dolore.',
                'date' => '2026-04-05 12:40:24',
                'view_count' => 3002,
                'like_count' => 1004,
                "img" => "/img/image.jpg",
            ],
            [
                'author_id' => 3,
                'category_id' => 10,
                'title' => 'Artemis 2 dunya tarapgel.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing...',
                'date' => '2026-04-07 09:00:02',
                'view_count' => 1550800,
                'like_count' => 900000,            ],
            [
                'author_id' => 4,
                'category_id' => 9,
                'title' => 'ChatGPT 5.4 v chykdy.',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing...',
                'date' => '2026-01-01 09:00:02',
                'view_count' => 15800,
                'like_count' => 9000,
            ],
            [
                'author_id' => 4,
                'category_id' => 2,
                'title' => 'Arasynag 2 yakynlady',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing...',
                'date' => '2026-04-15 09:00:02',
                'view_count' => 1000,
                'like_count' => 870,
            ],
        ];
        foreach ($posts as $i) {
            \App\Models\Post::create([
                'author_id' => $i['author_id'],
                'category_id' => $i['category_id'],
                'title' => $i['title'],
                'content' => $i['content'],
                'date' => $i['date'],
                'view_count' => $i['view_count'],
                'like_count' => $i['like_count'],
            ]);
        };
        // foreach ($cars as $i) {
        //     \App\Models\Car::create([
        //         'name' => $i['name'],
        //         'price' => $i['price'],
        //         'year' => $i['year'],
        //         'brand' => $i['brand'],
        //         'model' => $i['model'],
        //         'color' => $i['color'],
        //         'engine' => $i['engine'],
        //         'location' => $i['location'],
        //         'is_credit' => $i['is_credit'],
        //         'is_exchanged' => $i['is_exchanged'],
        //         'code' => $i['code'],
        //         'owner' => $i['owner'],
        //         'description' => $i['description'],
        //     ]);
        // };
        
        
    }
}

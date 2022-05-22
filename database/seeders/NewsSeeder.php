<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $faker = Factory::create();
        for($j=1; $j<=5; $j++) {
            for ($i = 0; $i < 10; $i++) {
                $title = $faker->jobTitle();
                $data[] = [
                    'source_id' => $i+1,
                    'category_id' => $j,
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'author' => $faker->userName(),
                    'description' => $faker->text(100),
                    'image'  => $faker->imageUrl(),
                    'created_at' => $faker->dateTime(),
                    'updated_at' => $faker->dateTime()
                ];
            }
        }
        return $data;
    }
}

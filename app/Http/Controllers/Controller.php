<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategory(): array
    {
        $category = [];
        $faker = Factory::create();

        for($i=0; $i<5; $i++){
            $id = $i +1;
            $category[] = [
                'id' => $id,
                'category' => $faker->text(10)
            ];
        }
        return $category;
    }

    public function getNews(int $id = null): array
    {
        $news = [];
        $faker = Factory::create();

        if($id) {
            return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'author' => $faker->name(),
                'image'  => $faker->imageUrl(),
                'description' => $faker->text(150),
                'created_at' => now('Europe/Moscow')
            ];
        }

        for($i=0; $i<10; $i++) {
            $id = $i +1;
            $news[] = [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'author' => $faker->name(),
                'image'  => $faker->imageUrl(),
                'description' => $faker->text(150),
                'created_at' => now('Europe/Moscow')
            ];
        }

        return $news;
    }
}

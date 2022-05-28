<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $faker = Factory::create();
        for($i=0; $i<5; $i++) {
            $data[] = [
                'name' => $faker->name(),
                'description' => $faker->text(100),
                'updated_at' => $faker->dateTime(),
                'created_at' => $faker->dateTime()
            ];
        }

        return $data;
    }
}

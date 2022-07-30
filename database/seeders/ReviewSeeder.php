<?php

namespace Database\Seeders;

use App\Models\Review;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Schema::disableForeignKeyConstraints();
        DB::table('reviews')->truncate();
     

        for ($i = 0; $i <= 10; $i++) {
            Review::create([
                'name' => ['ar' => $faker->name, 'en' => $faker->name , 'ru' => $faker->name , 'it' => $faker->name , 'de' => $faker->name],
                'link'=>$faker->url(),
              'image' => $faker->randomElement(['1655904028YqnT16whqsTp79R6HOZP.png','1655904062fVZQROyr8vn00QDy9vQn.png','1658757932viator.png','165718660363430772.png'])
            
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}

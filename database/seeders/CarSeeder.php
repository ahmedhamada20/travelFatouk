<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarExtras;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CarSeeder extends Seeder
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
        DB::table('cars')->truncate();
        DB::table('car_extras')->truncate();
     

        for ($i = 0; $i <= 10; $i++) {
            Car::create([
                'name' => ['ar' => $faker->name, 'en' => $faker->name , 'ru' => $faker->name , 'it' => $faker->name , 'de' => $faker->name],
                'notes' => ['ar' => $faker->paragraph(), 'en' => $faker->paragraph() , 'ru' => $faker->paragraph() , 'it' => $faker->paragraph() , 'de' => $faker->paragraph()],
                'conslshen' => ['ar' => $faker->paragraph(), 'en' => $faker->paragraph() , 'ru' => $faker->paragraph() , 'it' => $faker->paragraph() , 'de' => $faker->paragraph()],
                'car_type' => $faker->name,
                'car_model' => $faker->randomElement(['2020','2021','2020','2022']),
                'price' => $faker->randomElement(['500','100','600','200']),
                'price_back' => $faker->randomElement([100, 200, 300, 400, 500]),
            ]);
        }

        for ($i = 0; $i <= 10; $i++) {
            CarExtras::create([
                'name' => $faker->name,
                'price' => $faker->randomElement(['500','100','600','200']),
              
                'car_id' => Car::all()->random()->id,
            ]);
        }


        for ($i = 1; $i <= 10 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".jpg",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\Car'
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}

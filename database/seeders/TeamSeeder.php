<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Team;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TeamSeeder extends Seeder
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
        DB::table('teams')->truncate();
     

        for ($i = 0; $i <= 10; $i++) {
            Team::create([
                'jop' => ['ar' => $faker->paragraph, 'en' => $faker->paragraph , 'ru' => $faker->paragraph , 'it' => $faker->paragraph , 'de' => $faker->paragraph],
                "name" => $faker->name,
                'facebook'=>$faker->url(),
                'twitter'=>$faker->url(),
                'instagram'=>$faker->url(),
                'linkedin'=>$faker->url(),
            
            ]);
        }


        for ($i = 1; $i <= 10 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".jpg",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\Team'
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}

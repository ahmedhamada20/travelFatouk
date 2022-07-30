<?php

namespace Database\Seeders;

use App\Models\TestMeniol;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TestMeniolSeeder extends Seeder
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
        DB::table('test_meniols')->truncate();


        for ($i = 0; $i <= 10; $i++) {
            TestMeniol::create([
                'name' => ['ar' => $faker->name, 'en' => $faker->name, 'ru' => $faker->name, 'it' => $faker->name, 'de' => $faker->name],
                'job' => ['ar' => $faker->name, 'en' => $faker->name, 'ru' => $faker->name, 'it' => $faker->name, 'de' => $faker->name],
                'notes' => ['ar' => $faker->name, 'en' => $faker->name, 'ru' => $faker->name, 'it' => $faker->name, 'de' => $faker->name],
                'image' => $faker->randomElement(['3e.jpg', '24.jpg', '32002387034_c0a7de6f72_b.jpg', 'caravan-logo-designs-icon-and-symbol-minimalist-vector.webp']),
                'rate' => 5,
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}

<?php

namespace Database\Factories;

use App\Models\Destenation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfer>
 */
class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>['en' => $this->faker->name, 'ar' => $this->faker->name , 'ru' =>$this->faker->name  , 'it' => $this->faker->name  , 'de' => $this->faker->name ],
            'notes' => ['ar' => $this->faker->paragraph, 'en' => $this->faker->paragraph , 'ru' => $this->faker->paragraph , 'it' => $this->faker->paragraph , 'de' => $this->faker->paragraph],
            'type' => $this->faker->randomElement([1, 0]),
            // 'price_go' => $this->faker->randomElement([100, 200, 300, 400, 500]),
            // 'price_back' => $this->faker->randomElement([100, 200, 300, 400, 500]),
            // 'price_EG' => $this->faker->randomElement([100, 200, 300, 400, 500]),
            // 'price_EN' => $this->faker->randomElement([100, 200, 300, 400, 500]),
            // 'price_EG_go' => $this->faker->randomElement([100, 200, 300, 400, 500]),
            // 'price_EG_go_back' => $this->faker->randomElement([100, 200, 300, 400, 500]),
            // 'price_EN_go' => $this->faker->randomElement([100, 200, 300, 400, 500]),
            // 'price_EN_go_back' => $this->faker->randomElement([100, 200, 300, 400, 500]),
            'start_date' => $this->faker->date('Y-m-d'),
            'end_date' => $this->faker->date('Y-m-d'),
            'rate' => $this->faker->randomElement([1, 2, 3, 4]),
            'destenation_id' => Destenation::all()->random()->id,
            'route_form' => ['ar' => $this->faker->name, 'en' => $this->faker->name],
            'route_to' => ['ar' => $this->faker->name, 'en' => $this->faker->name],
        ];
       
    }
}

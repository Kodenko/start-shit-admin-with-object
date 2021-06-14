<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Building::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>    $this->faker->company,
            'country' =>    $this->faker->country,
            'city' =>    $this->faker->city,
            'price' =>    $this->faker->randomNumber(2),
            'address' =>   $this->faker->address,
            'description' =>   $this->faker->text,
            'content' =>     $this->faker->text,
            'roi' =>    $this->faker->randomDigit,
            'currency_id' =>     random_int(1,2),
            'type_id' =>     random_int(1,2),
            'deal_id' =>     random_int(1,2),
            'locale_id' => random_int(1,3),
            'latitude' =>    $this->faker->latitude ,
            'longitude' =>    $this->faker->longitude ,

        ];
    }
}

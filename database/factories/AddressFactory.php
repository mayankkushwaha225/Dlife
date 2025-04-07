<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'addre_1' => $this->faker->word,
            'addre_2' => $this->faker->word,
            'city' => $this->faker->city,
            'zip' => $this->faker->postcode,
            'state' => $this->faker->word,
            'country' => $this->faker->country,
        ];
    }
}

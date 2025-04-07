<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\User;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'mobile' => $this->faker->word,
            'pancard' => $this->faker->word,
            'aadhar' => $this->faker->word,
            'address' => $this->faker->word,
            'zip' => $this->faker->postcode,
            'agent_id' => User::factory(),
            'email' => $this->faker->safeEmail,
            'dob' => $this->faker->date(),
            'marrige_date' => $this->faker->date(),
            'softdeletes' => $this->faker->word,
        ];
    }
}

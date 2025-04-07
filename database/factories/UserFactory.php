<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password,
            'mobile' => $this->faker->word,
            'role_id' => Role::factory(),
            'dob' => $this->faker->date(),
            'manager_id' => User::factory(),
            'address' => $this->faker->word,
            'zip' => $this->faker->postcode,
            'softdeletes' => $this->faker->word,
        ];
    }
}

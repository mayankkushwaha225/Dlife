<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Address;
use App\Models\Lead;
use App\Models\Org;
use App\Models\User;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'org_id' => Org::factory(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'user_id' => User::factory(),
            'phone' => $this->faker->phoneNumber,
            'salary' => $this->faker->randomFloat(0, 0, 9999999999.),
            'company' => $this->faker->company,
            'email' => $this->faker->safeEmail,
            'address_id' => Address::factory(),
            'panard' => $this->faker->word,
            'aadhar' => $this->faker->word,
            'occupation' => $this->faker->word,
        ];
    }
}

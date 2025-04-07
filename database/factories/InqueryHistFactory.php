<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Inquery;
use App\Models\Inquery_hist;
use App\Models\Lead;
use App\Models\Org;
use App\Models\Status;
use App\Models\User;

class InqueryHistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InqueryHist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'org_id' => Org::factory(),
            'date' => $this->faker->dateTime(),
            'cust_id' => Lead::factory(),
            'inquery_id' => Inquery::factory(),
            'user_id' => User::factory(),
            'status_id' => Status::factory(),
            'comment' => $this->faker->word,
        ];
    }
}

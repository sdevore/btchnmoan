<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TestCase;

class TestCaseFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = TestCase::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'version' => $this->faker->word,
            'expected_result' => $this->faker->word,
            'automation' => $this->faker->word,
            'feature' => $this->faker->word,
            'ticket' => $this->faker->word,
            'user_id' => \App\Models\User::factory(),
            'modified_by' => \App\Models\User::factory(),
            'test_suite_id' => \App\Models\TestSuite::factory(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TestRun;

class TestRunFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var  string
    */
    protected $model = TestRun::class;

    /**
    * Define the model's default state.
    *
    * @return  array
    */
    public function definition(): array
    {
        return [
            'status' => $this->faker->word,
            'comment' => $this->faker->word,
            'environment_id' => \App\Models\Environment::factory(),
            'test_case_id' => \App\Models\TestCase::factory(),
            'user_id' => \App\Models\User::factory(),
            'release_id' => \App\Models\Release::factory(),
            'test_run_id' => $this->faker->randomNumber(),
            'modified_by' => \App\Models\User::factory(),
            'previous_test_run_id' => \App\Models\TestRun::factory(),
        ];
    }
}

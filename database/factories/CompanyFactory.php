<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'company_active' => $this->faker->boolean(true),
            'company_is_parent' => $this->faker->boolean(false),
            'company_parent_id' => $this->faker->numberBetween(1, 1),
            'company_federal_register' => $this->faker->word(),
            'company_state_register' => $this->faker->word(),
            'company_municipal_register' => $this->faker->word(),
            'company_name' => $this->faker->name(),
            'company_business_name' => $this->faker->name(),
            'company_address' => $this->faker->address(),
            'company_number' => $this->faker->word(),
            'company_email' => $this->faker->unique()->safeEmail(),
            'company_obs' => $this->faker->word(),
            'company_file' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

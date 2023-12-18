<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TenantFactory extends Factory
{
    protected $model = Tenant::class;

    public function definition(): array
    {
        return [
            //'uuid' => $this->faker->uuid(),
            'tenant_active' => $this->faker->boolean(true),
            'tenant_is_parent' => $this->faker->boolean(false),
            'tenant_parent_id' => $this->faker->numberBetween(1, 1),
            'tenant_federal_register' => $this->faker->word(),
            'tenant_state_register' => $this->faker->word(),
            'tenant_municipal_register' => $this->faker->word(),
            'tenant_name' => $this->faker->name(),
            'tenant_business_name' => $this->faker->name(),
            'tenant_address' => $this->faker->address(),
            'tenant_number' => $this->faker->word(),
            'tenant_email' => $this->faker->unique()->companyEmail(),
            'tenant_obs' => $this->faker->word(),
            'tenant_file' => $this->faker->word(),
            'tenant_data' => json_encode(['1' => 'AAA']),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

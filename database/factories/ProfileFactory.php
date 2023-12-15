<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    protected $model = Profile::class;

    public function definition(): array
    {

        return [
            'tenant_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->unique()->numberBetween(1, 11),
            'profile_image' => $this->faker->imageUrl(150, 150),
            'profile_cpf' => $this->faker->cpf(),
            'profile_rg' => $this->faker->rg(),
            'profile_rg_emit' => $this->faker->regexify('[A-Z]{2}'),
            'profile_birthday' => $this->faker->date('Y-m-d', '-18 years'),
            'profile_email' => $this->faker->unique()->companyEmail,
            'profile_address' => $this->faker->streetAddress,
            'profile_number' => $this->faker->buildingNumber,
            'profile_neighborhood' => $this->faker->citySuffix,
            'profile_city' => $this->faker->city,
            'profile_estate' => $this->faker->region(),
            'profile_country' => $this->faker->country,
            'profile_cep' => $this->faker->postcode,
            'profile_telephone1' => $this->faker->cellphoneNumber(),
            'profile_telephone2' => $this->faker->phone(),
            'profile_telephone3' => $this->faker->landlineNumber(false),
            'profile_telephone4' => $this->faker->phoneNumberCleared(),
            'profile_obs' => $this->faker->realText(),
            'profile_file' => $this->faker->imageUrl(400, 400),
        ];
    }
}

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
            'tenant_id' => fake()->numberBetween(1, 10),
            //'user_id' => fake()->unique()->numberBetween(1, 11),
            'user_id' => fake()->unique()->numberBetween(1, 11),
            'profile_image' => fake()->imageUrl(150, 150),
            'profile_cpf' => fake()->cpf(),
            'profile_rg' => fake()->rg(),
            'profile_rg_emit' => fake()->regexify('[A-Z]{2}'),
            'profile_birthday' => fake()->date('Y-m-d', '-18 years'),
            'profile_email' => fake()->unique()->companyEmail,
            'profile_address' => fake()->streetAddress,
            'profile_number' => fake()->buildingNumber,
            'profile_neighborhood' => fake()->citySuffix,
            'profile_city' => fake()->city,
            'profile_estate' => fake()->region(),
            'profile_country' => fake()->country,
            'profile_cep' => fake()->postcode,
            'profile_telephone1' => fake()->cellphoneNumber(),
            'profile_telephone2' => fake()->phone(),
            'profile_telephone3' => fake()->landlineNumber(false),
            'profile_telephone4' => fake()->phoneNumberCleared(),
            'profile_obs' => fake()->realText(),
            'profile_file' => fake()->imageUrl(400, 400),
        ];
    }
}

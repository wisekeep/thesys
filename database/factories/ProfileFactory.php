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
            'user_id' => $this->faker->unique()->numberBetween($min = 1, $max = 10),
            'uuid' => $this->faker->uuid(),
            'profile_image' =>  $this->faker->imageUrl($width = 50, $height = 50),
            'profile_cpf' => $this->faker->cpf,
            'profile_rg' => $this->faker->rg,
            'profile_rg_emit' => $this->faker->regexify('[A-Z]{2}'),
            'profile_birthday' => $this->faker->date($format = 'Y-m-d', $max = '-18 years'),
            'profile_email' => $this->faker->unique()->companyEmail, //,  $this->faker->unique()->safeEmail,
            'profile_address' => $this->faker->streetAddress,
            'profile_number' => $this->faker->buildingNumber,
            'profile_neighborhood' => $this->faker->citySuffix,
            'profile_city' => $this->faker->city,
            'profile_estate' => $this->faker->countryCode(),
            'profile_country' => $this->faker->country,
            'profile_cep' => $this->faker->postcode,
            'profile_telephone1' => $this->faker->unique()->phoneNumber,
            'profile_telephone2' => $this->faker->unique()->phoneNumber,
            'profile_telephone3' => $this->faker->unique()->phoneNumber,
            'profile_telephone4' => $this->faker->unique()->phoneNumber,
            'profile_obs' => $this->faker->text,
            //'profile_file' => $this->faker->file(storage_path('app/public'), storage_path('app/public/uploads'), false),
            'profile_file' => $this->faker->imageUrl($width = 400, $height = 400),
        ];
    }
}

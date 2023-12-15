<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Domain;
use App\Models\Profile;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Domain::factory(5)->create();

        Tenant::factory(10)->create();

        User::factory()->create([
            'uuid' => fake()->uuid(),
            'name' => 'User Admin',
            'email' => 'wisekeep@net.com',
            'password' => Hash::make(123456),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::factory(10)->create();

        Profile::factory(11)->create();
    }
}

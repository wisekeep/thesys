<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'uuid' => Uuid::uuid4(),
            'name' => 'User Admin',
            'email' => 'wisekeep@net.com',
        ]);

        User::factory(10)->create();
    }
}

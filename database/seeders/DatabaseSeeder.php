<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Rohan Parmar',
            'email' => 'rohanrparmar987@gmail.com',
            'username' => 'rohan_parmar',
            'password' => 'Rohan@123'
        ]);

        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
        ]);

    }
}

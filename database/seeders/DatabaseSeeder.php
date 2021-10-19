<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //for admin this is static factory
        \App\Models\User::factory()->create([
            'first_name' => 'Shaung',
            'last_name' => 'Bhone',
            'user_type' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(ProductSeeder::class);
    }
}

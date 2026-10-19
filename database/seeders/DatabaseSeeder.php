<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@inventaris.test'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('Admin12345!'),
            ]
        );

        $this->call([
            CategorySeeder::class,
            ItemSeeder::class,
        ]);
    }
}
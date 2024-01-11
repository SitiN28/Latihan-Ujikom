<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Mala',
            'email' => 'mala28.com',
            'password' => bcrypt('12345'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'Bilah',
            'email' => 'bilah18.com',
            'password' => bcrypt('12345'),
            'level' => 'operator'
        ]);
    }
}

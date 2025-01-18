<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'google_id' => '105988892791444275364',
            'name' => 'Muhammad Iqbal',
            'email' => 'iqbalmtgjr@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('qweasdzxc123'),
            'avatar' => 'https://lh3.googleusercontent.com/a/ACg8ocK6Jhg6YMiEWq6KDE0z7Emy4qRYb39ry2yvR92A9f_ED8yNiiI=s96-c'
        ]);
    }
}

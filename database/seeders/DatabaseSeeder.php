<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // default seeder user 
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'riobushipa3@gmail.com',
            'password' => Hash::make('12345678'), // Ganti dengan password yang diinginkan
            'role' => 'superadmin', 
        ]);
    }
}

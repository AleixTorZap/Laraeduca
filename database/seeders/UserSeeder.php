<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Aleix',
            'email' => 'aleix@gmail.com',
            'password' => bcrypt('password'),
        ])->assignRole('Admin');
        User::factory(9)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */public function run(): void
{
    User::create([
        'name' => 'Sachin',
        'email' => 'sachin@example.com',
        'password' => bcrypt('sachin2006'),
    ]);

    User::create([
        'name' => 'Rahul',
        'email' => 'rahul@example.com',
        'password' => bcrypt('test2006'),
    ]);

    User::create([
        'name' => 'Priya',
        'email' => 'priya@example.com',
        'password' => bcrypt('test2006'),
    ]);
}
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'User',
            'phone' => '12345668',
            'email' => 'User@example.com',
            'password' => Hash::make('password')
        ]);

        Admin::create([
            'name' => 'Admin',
            'phone' => '12345688',

            'email' => 'Admin@example.com',
            'password' => Hash::make('password')


        ]);
        Teacher::create([
            'name' => 'Teacher',
            'phone' => '12345698',
            'email' => 'Teacher@example.com',
            'password' => Hash::make('password')
        ]);
        Student::create([
            'name' => 'Student',
            'phone' => '12345618',
            'email' => 'Student@example.com',
            'password' => Hash::make('password')

        ]);

        $this->call([
            SettingSeeder::class,
        ]);
    }
}

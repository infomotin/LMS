<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->string('name');
        // $table->string('username')->nullable();
        // $table->string('email')->unique();
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');
        // $table->string('avatar')->nullable();
        // $table->string('phone')->nullable();
        // $table->string('address')->nullable();
        // $table->enum('role', ['admin', 'instructor', 'author', 'student','head_instructor','lecturer'])->default('student');
        // $table->enum('status', ['active', 'inactive','pending','blocked','deleted'])->default('active');
        User::insert([
            //admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'a@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'admin',
                'status' => 'active',
                'email_verified_at' => now(),
                'remember_token' => null
            
            ],
            //instructor
            [
                'name' => 'Instructor',
                'username' => 'instructor',
                'email' => 'i@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'instructor',
                'status' => 'active',
                'email_verified_at' => now(),
                'remember_token' => null
            
            ],
            //student
            [
                'name' => 'Student',
                'username' => 'student',
                'email' => 's@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'student',
                'status' => 'active',
                'email_verified_at' => now(),
                'remember_token' => null
            
            ],
            //author
            [
                'name' => 'Author',
                'username' => 'author',
                'email' => 'au@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'author',
                'status' => 'active',
                'email_verified_at' => now(),
                'remember_token' => null
            
            ],
            //lecturer
            [
                'name' => 'lecturer',
                'username' => 'lecturer',
                'email' => 'l@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role' => 'lecturer',
                'status' => 'active',
                'email_verified_at' => now(),
                'remember_token' => null
            ]

        ]);
    }
}

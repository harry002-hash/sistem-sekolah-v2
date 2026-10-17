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
        $userTeacherEmail = 'budi@ski.sch.id';
        $userStudentEmail = 'harry@ski.sch.id';

        // User Teacher
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Budi Sasongko',
                'password' => bcrypt('password'),
                'role' => 'teacher'
            ]
        );

        // User Student
        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Harry Vanessa',
                'password' => bcrypt('password'),
                'role' => 'student'
            ]
        );
    }
}

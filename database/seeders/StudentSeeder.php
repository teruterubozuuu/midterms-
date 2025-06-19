<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = Course::factory()->create(); 
        Student::factory(5)->create([
             "user_id" => User::factory(),
             "course_id" => $course->id,
        ]
            
        );
    }
}

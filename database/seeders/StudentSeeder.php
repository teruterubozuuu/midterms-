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
        $user = User::factory()->create();
        $course = Course::factory()->create();
        Student::factory()
            ->count(5)
            ->create([
                'user_id' => $user->id,
                'course_id' => $course->id,
            ]);
    }
}

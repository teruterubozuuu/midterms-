<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

      $program = fake()->randomElement(['Math', 'Science', 'English', 'Computer Science']);
       return [
        'first_name'=>fake()->firstName(),
        'last_name'=>fake()->lastName(),
        'email'=>fake()->safeEmail(),
         'department'=>$program,
         'birthday'=> fake()->dateTime(),
       ];
    }
}

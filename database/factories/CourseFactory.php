<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      $subject = fake()->randomElement(array:['Web Programming','Physics','Data Structures and Algorithms','Probability and Statistics']);
       
      return [
        'subject'=>$subject,
        'course_code'=>strtoupper(fake()->bothify('CS###')),
        'credits'=>fake()->numberBetween(1,5),
         'description'=>fake()->sentence(10),
       ];
    }
}

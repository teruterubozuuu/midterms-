<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
     
       $program = fake()->randomElement(array:['BSCS','BSEMC','BAMMA']);
       return [
        'first_name' => $this->faker->firstName,
        'last_name' => $this->faker->lastName,
        'program' => $program,
        'birthday' => $this->faker->date(),
        
       ];
    }
}

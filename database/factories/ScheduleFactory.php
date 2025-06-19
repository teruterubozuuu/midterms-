<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $room = fake()->randomElement(array:['1','2','3','4','5']);
                $term= fake()->randomElement(array:['1','2','3']);
               return [
        'day_of_week'=>fake()->dateTime(),
        'time_slot'=>fake()->time(),
        'room'=>$room,
         'term'=>$term,
       ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    protected static string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       return [
        'first_name'=>fake()->firstName(),
        'last_name'=>fake()->lastName(),
        'user_name'=>fake()->firstName(),
         'password' => static::$password ??= Hash::make('password'),
         'registration_date'=>now(),
       ];
    }
}

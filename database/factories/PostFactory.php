<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->sentence(20),
        ];
    }

    // Post Factory has definition for body using faker for 20 sentence each

    // creating 200 fake data for user with id 23 in the database with tinker (php artisan tinker)
    // App/Models/Post::factory()->times(200)->create(['user_id' => 23]);
}

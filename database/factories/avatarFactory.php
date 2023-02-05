<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\avatar>
 */
class avatarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Ottaviano\Faker\Gravatar($faker));
        $randomNum = fake()->numberBetween(5, false);
        $firstname = fake()->firstName();
        $secondname = fake()->lastName();
        return [

            "nickname" => $firstname . $secondname . $randomNum,
            "avatarImg" => $faker->gravatarUrl(),
            "email" => fake()->email(),
            "code" => fake()->md5()
        ];
    }
}
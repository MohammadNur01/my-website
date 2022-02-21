<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name(),
            // 'email' => $this->faker->unique()->safeEmail(),
            // 'body' => $this->faker->paragraph()
        ];
    }
}

        // About::create([
        //     'name' => 'Mohammad Nuraini',
        //     'email' => 'mohammadnur@gmail.com',
        //     'image' => 'person.jpg',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In beatae dicta atque velit eaque totam distinctio exercitationem?'
        // ]);

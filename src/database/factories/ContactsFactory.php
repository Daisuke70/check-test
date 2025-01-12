<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last-name' => fake()->name(),
            'first-name', 
            'gender',
            'email',
            'tel-1',
            'tel-2', 
            'tel-3',
            'address',
            'building',
            'categories',
            'detail'
        ];
    }
}

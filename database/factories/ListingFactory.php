<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'tags' => 'laravel, livewire, backend',
            'company' => $this->faker->company(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url(),
            'logo' => '',
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(50),
        ];
    }
}

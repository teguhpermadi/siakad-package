<?php

namespace Teguhpermadi\SiakadPackage\Database\Factories;
// namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'address' => fake()->address(),
            'village_id' => \Indonesia::allVillages()->random()->id,
            'postal_code' => fake()->postcode(),
            'npsn' => fake()->randomNumber(6),
            'nsm' => fake()->randomNumber(9),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'logo' => fake()->imageUrl(),
            'photo' => fake()->imageUrl(),
        ];
    }
}

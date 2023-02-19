<?php

namespace Teguhpermadi\SiakadPackage\Database\Factories;
// namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcademicYear>
 */
class AcademicYearFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'headmaster' => Teacher::all()->random()->id,
            'year' => fake()->year(),
            'semester' => fake()->randomElement(['ganjil', 'genap']),
            'receiving_date' => fake()->date(),
        ];
    }
}

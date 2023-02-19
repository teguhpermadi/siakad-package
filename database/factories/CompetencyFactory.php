<?php

namespace Teguhpermadi\SiakadPackage\Database\Factories;
// namespace Database\Factories;

use App\Models\TeacherSubject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompetencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'teacher_subject_id' => TeacherSubject::all()->random()->id,
            'description' => fake()->realText(100),
        ];
    }
}

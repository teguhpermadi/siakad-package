<?php

namespace Teguhpermadi\SiakadPackage\Database\Factories;
// namespace Database\Factories;

use App\Models\AcademicYear;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeacherSubject>
 */
class TeacherSubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'academic_year_id' => AcademicYear::all()->random()->id,
            'teacher_id' => Teacher::all()->random()->id,
            'subject_id' => Subject::all()->random()->id,
            'score_min' => fake()->randomNumber(2),
        ];
    }
}

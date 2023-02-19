<?php

namespace Teguhpermadi\SiakadPackage\Database\Factories;
// namespace Database\Factories;

use App\Models\AcademicYear;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
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
            'grade_id' => Grade::all()->random()->id,
            'student_id' => Student::all()->random()->id,
        ];
    }
}
